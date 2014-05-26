<!--
function mmLoadMenus() 
{


	// Example
	var fore_text_color = "#efefef";
	var fore_hover_text_color = "#E6D416";
	var bg_color = "#000000";
	var bg_hover_color = "#000000";
	var menu_width = 180
	var menu_border = 0;
	var item_border = 1;
	var item_height = 35;
	
	
	window.about = new Menu("root", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		about.addMenuItem("History", "location='history.php'");
		about.addMenuItem("Philosophy", "location='philosophy.php'");
		about.addMenuItem("Your Team", "location='your-team.php'");
		about.addMenuItem("Giving Back", "location='giving-back.php'");
		about.addMenuItem("Sustainability", "location='#'");
		about.addMenuItem("Recognition", "location='safety.php'");
		about.addMenuItem("Advisory Board", "location='peer_group.php'");
		
		
		
		
	
	// vet sub menus 
	window.vet_projects = new Menu("Projects", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		vet_projects.addMenuItem("1-3 Exam Rooms", "location='veterinary-projects.php?type=4'");
		vet_projects.addMenuItem("4-5 Exam Rooms", "location='veterinary-projects.php?type=5'");
		vet_projects.addMenuItem("Over 6 Exam Rooms", "location='veterinary-projects.php?type=6'");
		
		
	
	window.vet_team = new Menu("Team", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		vet_team.addMenuItem("Development Consultants", "location='vet-development-consultants.php'");
		vet_team.addMenuItem("Architects", "location='vet-architects.php'");
		vet_team.addMenuItem("Interior Designers", "location='vet-designers.php'");
		vet_team.addMenuItem("Project Managers", "location='vet-project-managers.php'");
		vet_team.addMenuItem("Project Superintendents", "location='vet-project-sups.php'");
		
		
		
	window.vet_news = new Menu("News", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		vet_news.addMenuItem("Press Releases", "location='news.php?page=1&type=1'");
		vet_news.addMenuItem("Newsletters", "location='news.php?page=1&type=3'");
		vet_news.addMenuItem("Conventions", "location='news.php?page=1&type=2'");
	
		
		
		
	window.vet = new Menu("root", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		
		vet.addMenuItem(vet_projects, "location='veterinary-projects.php'");
		vet.addMenuItem(vet_team, "location='#'");
		vet.addMenuItem(vet_news, "location='#'");
		vet.addMenuItem("Contact Us", "location='contact.php'");
		
		
		
		
		
		
		
		
		
		
		
	// funeral sub menus 
	window.funeral_projects = new Menu("Projects", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		funeral_projects.addMenuItem("Under 5,000 sf", "location='funeral-projects.php?type=7'");
		funeral_projects.addMenuItem("5,000 sf - 10,000 sf", "location='funeral-projects.php?type=8'");
		funeral_projects.addMenuItem("Over 10,000 sf", "location='funeral-projects.php?type=9'");
		
		

		
		
	
	window.funeral_team = new Menu("Team", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		funeral_team.addMenuItem("Development Consultants", "location='funeral-development-consultants.php'");
		funeral_team.addMenuItem("Architects", "location='funeral-architects.php'");
		funeral_team.addMenuItem("Interior Designers", "location='funeral-designers.php'");
		funeral_team.addMenuItem("Project Managers", "location='funeral-project-managers.php'");
		funeral_team.addMenuItem("Project Superintendents", "location='funeral-project-sups.php'");
		
		
		
	window.funeral_news = new Menu("News", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		funeral_news.addMenuItem("Press Releases", "location='news.php?page=3&type=1'");
		funeral_news.addMenuItem("Newsletters", "location='news.php?page=3&type=3'");
		funeral_news.addMenuItem("Conventions", "location='news.php?page=3&type=2'");
	
		
		
		
	window.funeral = new Menu("root", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		
		funeral.addMenuItem(funeral_projects, "location='funeral-projects.php'");
		funeral.addMenuItem(funeral_team, "location='#'");
		funeral.addMenuItem(funeral_news, "location='#'");
		funeral.addMenuItem("Contact Us", "location='contact.php'");
		
		
		
		
		
		
		
	// dental sub menus 
	
	window.dental_team = new Menu("Team", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		dental_team.addMenuItem("Development Consultants", "location='dental-development-consultants.php'");
		dental_team.addMenuItem("Architects", "location='dental-architects.php'");
		dental_team.addMenuItem("Interior Designers", "location='dental-designers.php'");
		dental_team.addMenuItem("Project Managers", "location='dental-project-managers.php'");
		dental_team.addMenuItem("Project Superintendents", "location='dental-project-sups.php'");
		
		
		
	window.dental_news = new Menu("News", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		dental_news.addMenuItem("Press Releases", "location='news.php?page=2&type=1'");
		dental_news.addMenuItem("Newsletters", "location='news.php?page=2&type=3'");
		dental_news.addMenuItem("Conventions", "location='news.php?page=2&type=2'");
	
		
		
		
	window.dental = new Menu("root", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		
		dental.addMenuItem("Projects", "location='dental-projects.php'");
		dental.addMenuItem(dental_team, "location='#'");
		dental.addMenuItem(dental_news, "location='#'");
		dental.addMenuItem("Contact Us", "location='contact.php'");
		
		
		
		
	window.news = new Menu("News", menu_width, item_height, "Verdana, Arial, Helvetica, sans-serif, Tahoma", 12,
		 fore_text_color, fore_hover_text_color, bg_color, bg_hover_color, "left", "top", 
		 5, 0, 500, 0, 0, true, true, true, 0, 0, 0, menu_border, item_border);
		 
		news.addMenuItem("Press Releases", "location='news.php?type=1'");
		news.addMenuItem("Newsletters", "location='news.php?type=3'");
		news.addMenuItem("Conventions", "location='news.php?type=2'");
		
		
		
		about.writeMenus();
	
}
//-->
