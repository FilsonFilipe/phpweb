<?php
/**
 * 
 */
class Sql
{
	private $conn;
	
	public function mysql($crud,$tabela,$dados=[])
	{
		try {
//                    Establecendo a Conexao

            $this->conn=new PDO(DNS,USUARIO,SENHA);

			switch ($crud) {
			case 'INSERT':
				$query="INSERT INTO $tabela SET ";
				foreach ($dados as $key => $value) {
					$query=$query.$key."=:".$key.", ";
				}
				$query=$query."dtregisto=NOW()";
			
				$stm=$this->conn->prepare($query);
				foreach ($dados as $key => $value) {
					$stm->bindValue($key,$value);
				}
				$stm->execute();
				return $stm;
				break;

			case 'SELECT':
				$query="SELECT*FROM $tabela WHERE ";

				foreach ($dados as $key => $value) {
					$query=$query.$key."=:".$key;
				}

				$stm=$this->conn->prepare($query);

				foreach ($dados as $key => $value) {
					$stm->bindParam(':'.$key,$value,PDO::PARAM_STR);
				}
				$stm->execute();
				return $stm;
				break;
                        case 'SELETALL':
				$query="SELECT * FROM $tabela  ORDER BY `dtregisto` DESC";
				$stm=$this->conn->prepare($query);
				$stm->execute();
				return $stm;
				break;

			case 'DELETE':

				$query="DELETE FROM $tabela WHERE ";
				foreach ($dados as $key => $value) {
					$query=$query.$key."=:".$key;
				}
				$stm=$this->conn->prepare($query);

				foreach ($dados as $key => $value) {
					$stm->bindParam(':'.$key,$value,PDO::PARAM_STR);
				}
				return $stm->execute();
				break;

			case 'UPDATE':
				$query="UPDATE $tabela SET ";

				foreach ($dados as $key => $value) {
					$query=$query.$key."=:".$key.",";
				}
				$query=$query." WHERE id=:id";

				$stm=$this->conn->prepare($query);

				foreach ($dados as $key => $value) {
					$stm->bindParam(':'.$key,$value,PDO::PARAM_STR);
				}
				$stm->bindParam(':id',$userId);
				return $stm->execute();
				break;

			default:
				return false;
				break;
		}
		} catch (Exception $e) {
			echo "Erro ao tentar executar o comando Sql ".$e->getLine();
		}
		
	}
}
?>