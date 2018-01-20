package softuniBlog.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import softuniBlog.bindingModel.ArticleBindingModel;
import softuniBlog.entity.Article;
import softuniBlog.entity.User;
import softuniBlog.repository.ArticleRepository;
import softuniBlog.repository.UserRepository;

import java.util.List;

@Controller
public class ArticleController {

    @Autowired
    private ArticleRepository articleRepo;

    @Autowired
    private UserRepository userRepo;

    @GetMapping("/articles/list")
    public String listArticles(Model model) {
        List<Article> articles = articleRepo.findAll();
        model.addAttribute("articles", articles);
        model.addAttribute("view", "articles/list");
        return "base-layout";
    }

    @GetMapping("/articles/view/{id}")
    public String articleDetails(
            Model model, @PathVariable("id") Integer id) {
        if (!this.articleRepo.exists(id)) {
            return "redirect:/";
        }
        Article article = articleRepo.findOne(id);
        model.addAttribute("article", article);
        model.addAttribute("view", "articles/view");
        return "base-layout";
    }

    @PreAuthorize("isAuthenticated()")
    @GetMapping("/articles/create")
    public String createShowForm(Model model) {
        List<Article> articles = articleRepo.findAll();
        model.addAttribute("view", "articles/create");
        return "base-layout";
    }

    @PreAuthorize("isAuthenticated()")
    @PostMapping("/articles/create")
    public String create(
            Model model, ArticleBindingModel articleFormData) {
        try {
            UserDetails userDetails =
                    (UserDetails) SecurityContextHolder.getContext()
                            .getAuthentication().getPrincipal();

            User user = userRepo.findByEmail(userDetails.getUsername());

            Article article = new Article();
            article.setTitle(articleFormData.getTitle());
            article.setContent(articleFormData.getContent());
            article.setAuthor(user);
            articleRepo.saveAndFlush(article);

            return "redirect:/";
        } catch (Exception ex) {
            model.addAttribute("errorMsg", "Cannot create article.");
            model.addAttribute("view", "articles/create");
            return "base-layout";
        }

    }

    @PreAuthorize("isAuthenticated()")
    @GetMapping("/articles/edit/{id}")
    public String editShowForm(
            Model model, @PathVariable("id") Integer id) {
        Article article = articleRepo.findOne(id);
        UserDetails userDetails =
                (UserDetails) SecurityContextHolder.getContext()
                        .getAuthentication().getPrincipal();

        if (article == null || !userDetails.getUsername()
                .equalsIgnoreCase(article.getAuthor().getEmail())) {
            model.addAttribute("errorMsg", "Cannot edit article: " + id);
            model.addAttribute("article", article);
            model.addAttribute("view", "articles/edit");
            return "base-layout";
        }
        model.addAttribute("article", article);
        model.addAttribute("view", "articles/edit");
        return "base-layout";

    }

    @PreAuthorize("isAuthenticated()")
    @PostMapping("/articles/edit/{id}")
    public String edit(
            Model model, @PathVariable("id") Integer id,
            ArticleBindingModel articleFormData) {
        Article article = articleRepo.findOne(id);
        try {

            UserDetails userDetails =
                    (UserDetails) SecurityContextHolder.getContext()
                            .getAuthentication().getPrincipal();

            if (article == null || !userDetails.getUsername()
                    .equalsIgnoreCase(article.getAuthor().getEmail())) {
                model.addAttribute("errorMsg", "Cannot edit article: " + id);
                model.addAttribute("article", article);
                model.addAttribute("view", "articles/edit");
                return "base-layout";
            }

            article.setTitle(articleFormData.getTitle());
            article.setContent(articleFormData.getContent());

            articleRepo.saveAndFlush(article);
            return "redirect:/";
        } catch (Exception ex) {
            model.addAttribute("errorMsg", "Cannot edit article.");
            model.addAttribute("view", "articles/edit");
            return "base-layout";
        }
    }

    @PreAuthorize("isAuthenticated()")
    @GetMapping("/articles/delete/{id}")
    public String deleteShowForm(
            Model model, @PathVariable("id") Integer id) {
        Article article = articleRepo.findOne(id);
        UserDetails userDetails =
                (UserDetails) SecurityContextHolder.getContext()
                        .getAuthentication().getPrincipal();

        if (article == null || !userDetails.getUsername()
                .equalsIgnoreCase(article.getAuthor().getEmail())) {
            model.addAttribute("errorMsg", "Cannot delete article: " + id);
            model.addAttribute("article", article);
            model.addAttribute("view", "articles/delete");
            return "base-layout";
        }
        model.addAttribute("article", article);
        model.addAttribute("view", "articles/delete");
        return "base-layout";

    }

    @PreAuthorize("isAuthenticated()")
    @PostMapping("/articles/delete/{id}")
    public String delete(
            Model model, @PathVariable("id") Integer id,
            ArticleBindingModel articleFormData) {
        Article article = articleRepo.findOne(id);
        try
        {
            UserDetails userDetails =
                    (UserDetails) SecurityContextHolder.getContext()
                            .getAuthentication().getPrincipal();

            if (article == null || !userDetails.getUsername()
                    .equalsIgnoreCase(article.getAuthor().getEmail())) {
                model.addAttribute("errorMsg", "Cannot delete article: " + id);
                model.addAttribute("article", article);
                model.addAttribute("view", "articles/delete");
                return "base-layout";
            }
            articleRepo.delete(id);
            articleRepo.flush();
            return "redirect:/";
        }
        catch (Exception ex) {
            model.addAttribute("errorMsg", "Cannot delete article.");
            model.addAttribute("view", "articles/delete");
            return "base-layout";
        }
    }
}
