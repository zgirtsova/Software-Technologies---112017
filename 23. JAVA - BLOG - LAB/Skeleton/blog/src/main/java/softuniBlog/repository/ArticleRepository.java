package softuniBlog.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import softuniBlog.entity.Article;
import softuniBlog.entity.Role;
import softuniBlog.entity.User;

public interface ArticleRepository extends JpaRepository<Article, Integer> {
    Article findByAuthor(User author);
}