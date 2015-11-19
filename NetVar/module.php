<?
	class NetVar extends IPSModule
	{
		
		
		
		public function Create() {
			parent::Create();
		 	$this->RegisterPropertyInteger("SocketID", 0);
		 	$this->RegisterPropertyInteger("COBID", 0);
		 	$this->RegisterPropertyInteger("VarNR", 0);
		 	$this->RegisterPropertyInteger("VarType", 0);
		 	$this->RegisterPropertyString("VarName","Variable");
		 	
		 }


		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();

			//Connect to available UDPSocket or create a new one
			$this->ConnectParent("{82347F20-F541-41E1-AC5B-A636FD3AE2D8}");
			
			
			switch ($this->ReadPropertyInteger("VarType")) {
				
				case 0:
       					break;
				case 1:
       					$variablenID = $this->RegisterVariableBoolean("NetVar", $this->ReadPropertyString("VarName"));
					break;
				case 2:
					echo "i ist gleich 2";
					break;
				
			}
			
		
		}

		

	}
?>
