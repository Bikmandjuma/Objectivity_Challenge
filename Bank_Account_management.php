	<?php

		//Bank account management
		echo "<u>User create account</u>";
		echo "<br /><br />";

		$id="1";
		$bank_account="400".rand(1,10).date("ymdhis"); //Variable account
		$fname="Bikman";
		$lname="Ntiruhungwa";
		$gender="Male";
		$phone="0785389000";
		$email="ntiruhungwab@gmail.com";
		$id_no="1199380022064009";
		$province="Western";
		$district="Rusizi";
		$sector ="Bugarama";
		$cell ="Nyange";
		$village ="Mubogora";
		$account_array_storage = array('id' => $id,'bank_account' => $bank_account,'firstname' => $fname,'lastname' => $lname,'gender' => $gender,'phone' => $phone,'email' => $email,'id_no' => $id_no,'province' => $province,'district' => $district,'sector' => $sector,'cell' => $cell,'village' => $village);


		//User create Account
		print_r($account_array_storage);

		echo "<br /><br />";
		echo "<u>Deposit</u>";
		echo "<br /><br />";


		//Deposit
		$Amount_input=20000; //deposit amount
		$Bank_account="";
		foreach ($account_array_storage as $key => $value) {
			$account=$account_array_storage['bank_account'];
		}
		$Bank_account=$account;
		$deposit_array = array('id' => 1,'bank_account' => $Bank_account,'amount' =>$Amount_input." Frw");

		//Prevent error handling
		try{
			
			if($Amount_input < 0){
				echo "Invalid input ".$Amount_input." , please enter positive number , you are depositing !";
			}else{
				print_r($deposit_array);

				echo "<br /><br />";
				echo "<u>Withdraw</u>";
				echo "<br /><br />";

				$withdraw_money_input=0; //Enter money to withdraw
				$Amount_withdrawing=$Amount_input-$withdraw_money_input;
				try {

					if($withdraw_money_input > $Amount_input){
						echo "Amount you entered is more than your balance , means negative balance doesn't exist , only ".$Amount_input." Frw left on your account !";
					}else{
						$deposit_array = array('id' => 1,'bank_account' => $Bank_account,'amount' =>$Amount_withdrawing." Frw");
						echo "Withdraw money : ".$withdraw_money_input." Frw<br />";
						// echo "Left amount : ".$Amount_withdrawing." Frw<br />";

						echo "<br /><br />";
						echo "<u>View Account Balance</u>";
						echo "<br /><br />";

						$deposit_array = array('id' => 1,'bank_account' => $Bank_account,'amount' =>$Amount_withdrawing." Frw");
						foreach ($deposit_array as $key => $value) {
							echo $key." : ".$value."<br />";
						}

					}

				} catch (Exception $e) {
					
				}
				

			}

		}catch(Exception $e){

			
		}


	?>