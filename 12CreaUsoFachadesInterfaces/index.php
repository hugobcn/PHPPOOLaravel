Log::setLogger(new HtmlLogger());
//$logger = new HtmlLogger(); new FileLogger();


//$ramm = Unit::createSoldier($logger)
$ramm = Unit::createSoldier()
            ->setWeapon(new Weapons\BasicSword())
            ->setArmor(new Armors\SilverArmor())
            ->setShield();
//$silence = new Unit('Silence', new Weapons\FireBow, $logger);
$silence = new Unit('Silence', new Weapons\FireBow);