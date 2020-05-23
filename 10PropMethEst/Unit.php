 public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        show($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

