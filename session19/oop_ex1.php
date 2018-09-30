<?php
	class User {
		var $name;
		var $email;
		var $phone;
		var $password;
		var $address;
		function Add() {

		}
		function Edit() {

		}
		function Register() {
			echo "<br/> Nhu Y";
		}
		function Login() {

		}
		function View() {

		}
		function List() {

		}
	} 
	class Customer extends User {
		var $add;
		var $id; 
		function pay() {

		}
		function history() {
			echo "<br/> da mua hang";
		}
	}
	$customer = new Customer();
		$customer->Edit();
		$customer->Register();
		$customer->Login();
		$customer->View();
?>