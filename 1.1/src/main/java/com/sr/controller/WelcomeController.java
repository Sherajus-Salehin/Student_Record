package com.sr.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
//  http://localhost:9090/Student_Record_1.1/
public class WelcomeController {
	@Autowired
	private GenericWelcomeService welcomeService;
	
	@RequestMapping("/")
	public String Weocomer(Model model) {
	//	WelcomeService welcomeService = new WelcomeService();
		List<String> welcomeMessage = welcomeService.getWelcomeMessage("kaj hoise");
		
		model.addAttribute("myWelcomeMessage", welcomeMessage);
		
		return "welcomeNew"; // /WEB-INF/views/welcomeNew.jsp
	}
}
