<?php

interface AdminModelInterface extends UserModelInterface
{
	public function getRole();

	public function setRole($role);
} 