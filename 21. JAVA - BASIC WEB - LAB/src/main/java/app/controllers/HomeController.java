package app.controllers;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.Date;

@RestController
public class HomeController {

    @RequestMapping("/")
    public String home() {
        return "Hello Spring Boot";
    }

    @RequestMapping("/zoya")
    public String zoya() {
        return "I am Zoya";
    }

    @RequestMapping("/date")
    public String date() {
        return new Date().toString();
    }
}
