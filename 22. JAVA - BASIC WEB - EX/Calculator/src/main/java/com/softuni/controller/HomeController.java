package com.softuni.controller;

import com.softuni.entity.Calculator;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class HomeController {
	@GetMapping("/")
	public String index(Model model) {
		model.addAttribute("operator", "+");
		model.addAttribute("view", "views/calculatorForm");
		return "base-layout";
	}

	@PostMapping("/")
	public String doCalculate(
			@RequestParam String leftOperand,
			@RequestParam String operator,
			@RequestParam String rightOperand,
			Model model
	) {
		Calculator calculator = new Calculator(
				Double.parseDouble(leftOperand),
				operator,
				Double.parseDouble(rightOperand)
		);

		double result = calculator.calculateResult();

		model.addAttribute("operator", operator);
		model.addAttribute("leftOperand", leftOperand);
		model.addAttribute("rightOperand", rightOperand);
		model.addAttribute("result", result);

		model.addAttribute("view", "views/calculatorForm");

		return "base-layout";
	}
}
