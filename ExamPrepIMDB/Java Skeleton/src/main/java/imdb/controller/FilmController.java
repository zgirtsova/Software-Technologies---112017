package imdb.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import imdb.bindingModel.FilmBindingModel;
import imdb.entity.Film;
import imdb.repository.FilmRepository;

import java.util.List;

@Controller
public class FilmController {

	private final FilmRepository filmRepository;

	@Autowired
	public FilmController(FilmRepository filmRepository) {
		//TODO: Implement me ...
	}

	@GetMapping("/")
	public String index(Model model) {
		//TODO: Implement me ...
	}

	@GetMapping("/create")
	public String create(Model model) {
		//TODO: Implement me ...
	}

	@PostMapping("/create")
	public String createProcess(Model model, FilmBindingModel filmBindingModel) {
		//TODO: Implement me ...
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		//TODO: Implement me ...
	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, FilmBindingModel filmBindingModel) {
		//TODO: Implement me ...
	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {
		//TODO: Implement me ...
	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(@PathVariable int id) {
		//TODO: Implement me ...
	}
}
