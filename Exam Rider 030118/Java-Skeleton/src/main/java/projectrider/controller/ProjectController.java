package projectrider.controller;

import org.springframework.validation.BindingResult;
import projectrider.entity.Project;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import projectrider.bindingModel.ProjectBindingModel;
import projectrider.repository.ProjectRepository;

import javax.validation.Valid;
import java.util.List;

@Controller
public class ProjectController {

	private final ProjectRepository projectRepository;

	@Autowired
	public ProjectController(ProjectRepository projectRepository) {

		this.projectRepository = projectRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		List<Project> projects = this.projectRepository.findAll();
		model.addAttribute("projects", projects);
		model.addAttribute("view", "project/index");
		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		model.addAttribute("project", new ProjectBindingModel());
		model.addAttribute("view", "project/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(
			Model model,
			@Valid ProjectBindingModel projectBindingModel,
			BindingResult bindingResult) {

		if (bindingResult.hasErrors()) {
			model.addAttribute("project", projectBindingModel);
			model.addAttribute("view", "project/create");
			return "base-layout";
		}

		Project p = new Project();
		p.setTitle(projectBindingModel.getTitle());
		p.setDescription(projectBindingModel.getDescription());
		p.setBudget(projectBindingModel.getBudget());
		projectRepository.saveAndFlush(p);

		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {

		Project project = this.projectRepository.findOne(id);
		if (project == null)
			return "redirect:/";

		model.addAttribute("project", project);
		model.addAttribute("view", "project/edit");
		return "base-layout";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(
			@PathVariable int id,
			Model model,
			@Valid ProjectBindingModel projectBindingModel,
			BindingResult bindingResult) {

		if (bindingResult.hasErrors()) {
			model.addAttribute("message", "Invalid data.");
			model.addAttribute("project", projectBindingModel);
			model.addAttribute("view", "project/edit");
			return "base-layout";
		}

		Project p = this.projectRepository.findOne(id);
		if (p == null)
			return "redirect:/";

		p.setTitle(projectBindingModel.getTitle());
		p.setDescription(projectBindingModel.getDescription());
		p.setBudget(projectBindingModel.getBudget());
		projectRepository.saveAndFlush(p);

		return "redirect:/";
	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {

		Project project = this.projectRepository.findOne(id);
		if (project == null)
			return "redirect:/";

		model.addAttribute("project", project);
		model.addAttribute("view", "project/delete");
		return "base-layout";
	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(
			@PathVariable int id,
			ProjectBindingModel projectBindingModel) {

		Project p = this.projectRepository.findOne(id);
		if (p == null)
			return "redirect:/";

		projectRepository.delete(p);
		projectRepository.flush();

		return "redirect:/";
	}
}
