<?

class gameMaster
{
	
	private $turn;			// ��Ԑ���p
/*	private $number;		// �z�� ����̐��딻��p
	private $answer;		// �z�� ����̐��딻��p*/
	private $playFlg;		// �v���C���[������p
	private $digitNumber;	//����̌���(����3�ŌŒ�)
	private $mPlayer;		// matchPlayer�N���X���i�[����
	private $player1;		// player�N���X���i�[����
	private $player2;		// player�N���X���i�[����
	
	public function __construct(){
	
		$this->digitNumber = 3;
	
	}
	
	public function startGame(){
	
	}
	
	public function endGame(){
	
	}
	
	public function playGame(){
	
	}
	
	// ���딻��
	public function judgeNum($aNumber){
		
		if($his->turn)
			$answer = $this->player2->getNumber();
		else
			$answer = $this->player1->getNumber();
		
	
		$eat = 0;
		$bite = 0;
		
		for($i = 0; $i < $this->digitNumber; $i++){
			for($j = 0; $j < $this->digitNumber; $j++){
			
				if(aNumber[$i] === $answer[$j]){
					if($i === $j){
					
						$eat++;
						break;
					
					}else{
					
						$bite++;
						break;
					
					}
				}
			
			}
		}
		
		$resultEatBite = new eatBite();
		$resultEatBite->setEat($eat);
		$resultEatBite->setBite($bite);
		
		return $resultEatBite;
		
	
	}
	
	public function clear(){
	
	}

}

// �ȉ��A�e�X�g�R�[�h