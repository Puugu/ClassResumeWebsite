/* jQuery File for CSS 405 Web Dev Course
USM Summer 2017
Created by Courtney Kirkham
Creation Date: 26 July 2017 */

$(document).ready(function() {
	
	//Function to hide contact form on pageload
	$("#formSection").hide();
	
	//Function to show contact form when contact is clicked
	$("#contactMe").click(function(){
		$("#formSection").show();
	});
	
	//Function to hide contact form after submission is clicked
	$("#contactSubmitButton").click(function(){
		$("#formSection").hide();
	});
	
	//Function to hide resume sections on pageload
	$(".profSum").hide();
	$(".presentations").hide();
	$(".communityInvolv").hide();
	$(".education").hide();
	$(".techSkills").hide();
	
	//Function to show internship experience
	$("#showInternshipXP").click(function(){
		$(".internShipXP").show();
		$(".profSum").hide();
		$(".presentations").hide();
		$(".communityInvolv").hide();
		$(".education").hide();
		$(".techSkills").hide();
		$("#formSection").hide();
	});
	
	//Function to show professional summary
	$("#showProfessionalSum").click(function(){
		$(".profSum").show();
		$(".internShipXP").hide();
		$(".presentations").hide();
		$(".communityInvolv").hide();
		$(".education").hide();
		$(".techSkills").hide();
		$("#formSection").hide();
	});
	
	//Function to show presentations
	$("#showPresentations").click(function(){
		$(".presentations").show();
		$(".profSum").hide();
		$(".internShipXP").hide();
		$(".communityInvolv").hide();
		$(".education").hide();
		$(".techSkills").hide();
		$("#formSection").hide();
	});
	
	//Function to show community involvement
	$("#showCommunityInvolv").click(function(){
		$(".communityInvolv").show();
		$(".profSum").hide();
		$(".presentations").hide();
		$(".internShipXP").hide();
		$(".education").hide();
		$(".techSkills").hide();
		$("#formSection").hide();
	});
	
	//Function to show education
	$("#showEd").click(function(){
		$(".education").show();
		$(".profSum").hide();
		$(".presentations").hide();
		$(".communityInvolv").hide();
		$(".internShipXP").hide();
		$(".techSkills").hide();
		$("#formSection").hide();
	});
	
	//Function to show technical skills
	$("#showTechSkillz").click(function(){
		$(".techSkills").show();
		$(".profSum").hide();
		$(".presentations").hide();
		$(".communityInvolv").hide();
		$(".education").hide();
		$(".internShipXP").hide();
		$("#formSection").hide();
	});
	
	//Function to show all
	$("#showAll").click(function(){
		$(".internShipXP").show();
		$(".profSum").show();
		$(".presentations").show();
		$(".communityInvolv").show();
		$(".education").show();
		$(".techSkills").show();
		$("#formSection").show();
	});
	
});