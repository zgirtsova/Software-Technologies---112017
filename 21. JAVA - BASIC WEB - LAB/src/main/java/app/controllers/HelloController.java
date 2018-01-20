package app.controllers;

import app.models.Student;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.Arrays;
import java.util.List;

@Controller
public class HelloController {

    @RequestMapping("/hello")
    public String hello(Model model) {
        List<Student> students = loadStudents();

        model.addAttribute("title", "Това е заглавието на страницата");
        model.addAttribute("students", students);
        return "hello";
    }

    private List<Student> loadStudents() {
        return Arrays.asList(
                new Student("Петър", 22),
                new Student("Мария", 19),
                new Student("Иван", 23)
        );
    }

    @RequestMapping("/numbers")
        public String numbers() {
            return "numbers";
        }

}
