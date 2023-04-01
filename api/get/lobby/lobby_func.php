<?php

function get_shop() {
    $r=array (
      'daily1' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaCharacter:CID_045_Athena_Commando_M_HolidaySweater',
        ),
        'price' => 800,
      ),
      'daily2' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaGlider:Glider_ID_005_HolidaySweater',
        ),
        'price' => 800,
      ),
      'daily3' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaPickaxe:Pickaxe_ID_015_HolidayCandyCane',
        ),
        'price' => 1500,
      ),
      'daily4' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaCharacter:CID_050_Athena_Commando_M_HolidayNutcracker',
        ),
        'price' => 2000,
      ),
      'daily5' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaPickaxe:Pickaxe_ID_019_Heart',
        ),
        'price' => 800,
      ),
      'daily6' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaCharacter:CID_046_Athena_Commando_F_HolidaySweater',
        ),
        'price' => 800,
      ),
      'featured1' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaCharacter:CID_049_Athena_Commando_M_HolidayGingerbread',
        ),
        'price' => 1200,
      ),
      'featured2' => 
      array (
        'itemGrants' => 
        array (
          0 => 'AthenaCharacter:CID_048_Athena_Commando_F_HolidayGingerbread',
        ),
        'price' => 1500,
      ),
    );
    echo json_encode($r);

}

function catalog() {
  $r=array (
    'refreshIntervalHrs' => 24,
    'dailyPurchaseHrs' => 24,
    'expiration' => '9999-12-31T00:00:00.000Z',
    'storefronts' => 
    array (
      0 => 
      array (
        'name' => 'BRDailyStorefront',
        'catalogEntries' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'BRWeeklyStorefront',
        'catalogEntries' => 
        array (
        ),
      ),
      2 => 
      array (
        'name' => 'BRSeasonStorefront',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'devName' => '[VIRTUAL]1 x Aerial Assault One for 500 MtxCurrency',
            'offerId' => 'v2:/km5i4yvqxd8sqav1r4tk4qlsjolqkd7o5g25p6elcbqwtlsulqnu6hv84ug58i9c',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
              0 => 'Panel 1',
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 500,
                'finalPrice' => 500,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 500,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnItemOwnership',
                'requiredId' => 'AthenaGlider:Glider_ID_001',
                'minQuantity' => 1,
              ),
            ),
            'offerType' => 'StaticPrice',
            'giftInfo' => 
            array (
            ),
            'refundable' => true,
            'metaInfo' => 
            array (
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_Featured_GliderMiG.DA_Featured_GliderMiG',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'AthenaGlider:Glider_ID_001',
                'quantity' => 1,
              ),
            ),
            'sortPriority' => -1,
            'catalogGroupPriority' => 0,
          ),
          1 => 
          array (
            'devName' => '[VIRTUAL]1 x Aerial Assault Trooper for 1200 MtxCurrency',
            'offerId' => 'v2:/6icfozpr9g7o1gxperhc5rl8dty1o4rzlszmiky0iafc012w5gcdczvsvbvqw8fv',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
              0 => 'Panel 2',
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 1200,
                'finalPrice' => 1200,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 1200,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnItemOwnership',
                'requiredId' => 'AthenaCharacter:CID_017_Athena_Commando_M',
                'minQuantity' => 1,
              ),
            ),
            'offerType' => 'StaticPrice',
            'giftInfo' => 
            array (
            ),
            'refundable' => true,
            'metaInfo' => 
            array (
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_Featured_SMaleHID017.DA_Featured_SMaleHID017',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'AthenaCharacter:CID_017_Athena_Commando_M',
                'quantity' => 1,
              ),
            ),
            'sortPriority' => -1,
            'catalogGroupPriority' => 0,
          ),
          2 => 
          array (
            'devName' => '[VIRTUAL]1 x Renegade Raider for 1200 MtxCurrency',
            'offerId' => 'v2:/erpaf2rm87d5xgdtqpgx3qyqwrjmn5gsog0cu792enrxh9k1jckzjvgvn6qu7fq7',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
              0 => 'Panel 3',
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 1200,
                'finalPrice' => 1200,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 1200,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnItemOwnership',
                'requiredId' => 'AthenaCharacter:CID_028_Athena_Commando_F',
                'minQuantity' => 1,
              ),
            ),
            'offerType' => 'StaticPrice',
            'giftInfo' => 
            array (
            ),
            'refundable' => true,
            'metaInfo' => 
            array (
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_Featured_SFemaleHID028.DA_Featured_SFemaleHID028',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'AthenaCharacter:CID_028_Athena_Commando_F',
                'quantity' => 1,
              ),
            ),
            'sortPriority' => -1,
            'catalogGroupPriority' => 0,
          ),
          3 => 
          array (
            'devName' => '[VIRTUAL]1 x Raider\'s Revenge for 1500 MtxCurrency4',
            'offerId' => 'v2:/w6aq7n8ma7gz342b4wus42hmkqz8suurbdvjo51ug6on7j9rme577eax92rlt4g9',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
              0 => 'Panel 4',
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 1500,
                'finalPrice' => 1500,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 1500,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnItemOwnership',
                'requiredId' => 'AthenaPickaxe:Pickaxe_Lockjaw',
                'minQuantity' => 1,
              ),
            ),
            'offerType' => 'StaticPrice',
            'giftInfo' => 
            array (
            ),
            'refundable' => true,
            'metaInfo' => 
            array (
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_Featured_PickaxeLockjaw.DA_Featured_PickaxeLockjaw',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'AthenaPickaxe:Pickaxe_Lockjaw',
                'quantity' => 1,
              ),
            ),
            'sortPriority' => -1,
            'catalogGroupPriority' => 0,
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'STWSpecialEventStorefront',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'devName' => '[VIRTUAL]1 x Commando Renegade for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/fe91e5ee1e64e09367f7f641e897c054a23822387ef79eb81b0bf0805f993c34',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Commando_XBOX_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
          1 => 
          array (
            'devName' => '[VIRTUAL]1 x Guardian Knox for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/83ac0269acedb2d5634a031f55b643b852272903e74d9fa1bb49256a0c06abef',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Constructor_XBOX_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
          2 => 
          array (
            'devName' => '[VIRTUAL]1 x Jade Assassin Sarah for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/9b91076467e61cf01a3c16e39a18331d2e23d754cdafc860aac0fdd7155615ae',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Ninja_XBOX_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
          3 => 
          array (
            'devName' => '[VIRTUAL]1 x Trailblazer Jess for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/aacc97a394a9feaa106ad275caad4e4f22b987d8ceb42d64991024bf6d8a5404',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Outlander_XBOX_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'STWRotationalEventStorefront',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'devName' => '[VIRTUAL]1 x Commando Ramirez for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/cbb7b1eb042cb87002d6a688e25dcabdb08a7de29bea0ced23aca176cd5c174a',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Commando_Sony_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
          1 => 
          array (
            'devName' => '[VIRTUAL]1 x Guardian Penny for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/3e03cd9c32d3b2c809b523aac846762ef0401c701e383451e88a0594318522fa',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Constructor_Sony_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
          2 => 
          array (
            'devName' => '[VIRTUAL]1 x Bluestreak Ken for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/4f1c82dc8fb66fef5a0046fb2163344069b65b6ba64e496939d2fc8e8f779157',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Ninja_Sony_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
          3 => 
          array (
            'devName' => '[VIRTUAL]1 x Trailblazer A.C. for 2800 GameItem : AccountResource:eventcurrency_scaling',
            'offerId' => 'v2:/5e359069d870aebce7043bcca03da243402bb3ac13b39a87a17e272682b0486f',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'GameItem',
                'currencySubType' => 'AccountResource:eventcurrency_scaling',
                'regularPrice' => 2800,
                'dynamicRegularPrice' => 2800,
                'finalPrice' => 2800,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'meta' => 
            array (
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'Hero:HID_Outlander_Sony_SR_T01',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'catalogGroupPriority' => 0,
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'CardPackStore',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => 'B9B0CE758A5049F898773C1A47A69ED4',
            'devName' => 'Always.UpgradePack.03',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 0,
                'finalPrice' => 0,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 0,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '63BE689248CAF1251C84B4B3574F90EF',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'metaAssetInfo' => 
            array (
              'structName' => 'FortCatalogMeta',
              'payload' => 
              array (
                'chaseItems' => 
                array (
                  0 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Ranged/Assault/Raygun/SID_Assault_Raygun_VR_Ore_T01.SID_Assault_Raygun_VR_Ore_T01\'',
                  1 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Melee/Blunt/Tools/Hammer_Heavy/SID_Blunt_Hammer_Heavy_R_Ore_T01.SID_Blunt_Hammer_Heavy_R_Ore_T01\'',
                  2 => 'FortWorkerType\'/Game/Items/Workers/Managers/ManagerDoctor_R_T01.ManagerDoctor_R_T01\'',
                ),
                'packDefinition' => 'FortCardPackItemDefinition\'/Game/Items/CardPacks/CardPack_Bronze.CardPack_Bronze\'',
              ),
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Upgrade-Lama',
              'ru' => 'Лама с улучшениями',
              'ko' => '업그레이드 라마',
              'en' => 'Upgrade Llama',
              'it' => 'Lama plus',
              'fr' => 'Lama amélioré',
              'es' => 'Llama mejorable',
              'ar' => 'لاما الترقية',
              'ja' => 'アップグレードラマ',
              'pl' => 'Ulepszlama',
              'es-419' => 'Llama de mejoras',
              'tr' => 'Geliştirme Laması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Das treue alte Lama, vollgepackt mit einer Fülle toller Sachen und Upgrade-Materialien. Enthält mindestens 4 Gegenstände, darunter ein seltener Gegenstand oder ein Held! Hat eine hohe Chance, sich aufzurüsten.',
              'ru' => 'Старая добрая лама, набитая полезными вещами и материалами для улучшений. Содержит как минимум 4 предмета, включая один редкий предмет или героя. Высокая вероятность получить улучшение.',
              'ko' => '다양한 물건과 업그레이드 재료가 담긴 믿음직한 라마입니다. 희귀 아이템이나 영웅을 포함해 최소 4개의 아이템이 들어있습니다! 업그레이드 확률이 높습니다.',
              'en' => 'The old faithful llama, packed with a variety of goodies and upgrade materials. Contains at least 4 items, including a rare item or a hero! Has a high chance to upgrade.',
              'it' => 'Il caro vecchio lama, carico di oggetti e materiali da potenziamento. Include almeno 4 oggetti, di cui un oggetto o un eroe rari! Probabilità elevata di potenziamento.',
              'fr' => 'Un bon vieux lama, plein de marchandises et de matériaux d\'amélioration divers et variés. Contient au moins 4 objets, dont un objet rare ou un héros. A de fortes chances de gagner en valeur.',
              'es' => 'La vieja y querida llama de siempre, atiborrada con una variedad de artículos y de materiales de mejora. Contiene al menos 4 objetos, ¡entre ellos un objeto raro o un héroe! Tiene una alta probabilidad de mejorarse.',
              'ar' => 'اللاما المخلصة القديمة المكدسة بمجموعة متنوعة من السلع ومواد الترقية. يحتوي على 4 عناصر على الأقل، تشتمل على عنصر نادر أو بطل! لديه فرصة كبيرة للترقية.',
              'ja' => '様々なアイテムやアップグレード用素材が詰まった、安心定番のラマ。レアアイテム1個、またはヒーロー1体を含む4個以上のアイテムが入っている！ 高確率でアップグレードのチャンスあり。',
              'pl' => 'Stara dobra lama, pełna różnych skarbów i materiałów do ulepszania. Zawiera przynajmniej 4 elementy. Jednym z nich jest na pewno rzadki przedmiot lub bohater. Ma duże szanse na ulepszenie. PRO100Kąt pozdrawia wszystkich Polaków.',
              'es-419' => 'La llama siempre fiel, llena de una variedad de productos y materiales de mejora. Contiene al menos 4 objetos, ¡incluido un héroe u objeto raro! Tiene una alta probabilidad de mejora.',
              'tr' => 'Çeşitli ürünler ve geliştirme malzemeleri ile doldurulmuş bildiğimiz lama. Nadir bir eşya veya kahraman da dahil olmak üzere en az 4 eşya içerir! Geliştirme şansı yüksektir.',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'CardPack:cardpack_bronze',
                'quantity' => 1,
              ),
            ),
          ),
          1 => 
          array (
            'offerId' => '1F6B613D4B7BAD47D8A93CAEED2C4996',
            'devName' => 'Mini Llama Manual Tutorial - high SharedDisplayPriority',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 0,
                'finalPrice' => 0,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 0,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => 1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '82ADCC874CFC2D47927208BAE871CF2B',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'metaAssetInfo' => 
            array (
              'structName' => 'FortCatalogMeta',
              'payload' => 
              array (
                'chaseItems' => 
                array (
                  0 => 'FortWorkerType\'/Game/Items/Workers/WorkerBasic_UC_T02.WorkerBasic_UC_T02\'',
                  1 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Melee/Blunt/Tools/Hammer_Heavy/SID_Blunt_Hammer_Heavy_UC_Ore_T02.SID_Blunt_Hammer_Heavy_UC_Ore_T02\'',
                  2 => 'FortWorkerType\'/Game/Items/Workers/Managers/ManagerDoctor_UC_T01.ManagerDoctor_UC_T01\'',
                ),
                'packDefinition' => 'FortCardPackItemDefinition\'/Game/Items/CardPacks/CardPack_Basic.CardPack_Basic\'',
              ),
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Mini-Belohnungslama',
              'ru' => 'Мини-лама с наградой',
              'ko' => '미니 보상 라마',
              'en' => 'Mini Reward Llama',
              'it' => 'Lama miniricompensa',
              'fr' => 'Mini lama à récompense',
              'es' => 'Minillama de recompensa',
              'ar' => 'لاما جوائز مصغرة',
              'ja' => 'ミニ報酬ラマ',
              'pl' => 'Minilama',
              'es-419' => 'Minillama de recompensa',
              'tr' => 'Mini Ödül Laması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Ein einfaches Lama, das mit allerlei gewöhnlichen Dingen gefüllt ist, um dich durch deine erste Apokalypse zu bringen. Enthält mindestens 3 Gegenstände.
  ',
              'ru' => 'Простенькая лама, набитая самыми важными вещами, которые помогут вам пережить ваш первый апокалипсис. Содержит по меньшей мере 3 предмета.
  ',
              'ko' => '첫 종말에서 생존을 도와줄 기본적인 물품이 담긴 단촐한 라마입니다. 최소 아이템 3개를 얻을 수 있습니다!
  ',
              'en' => 'A simple llama stuffed with basic goods to get you through your first apocalypse. Contains at least 3 items.
  ',
              'it' => 'Lama comune carico di oggetti base con cui affrontare la tua prima apocalisse. Include almeno 3 oggetti.
  ',
              'fr' => 'Un lama rempli de marchandises de base pour vous permettre de survivre à votre première apocalypse. Contient au moins 3 objets.
  ',
              'es' => 'Una simple llama rellena de artículos básicos con los que sobrevivir a tu primer apocalipsis. Contiene al menos 3 objetos.
  ',
              'ar' => 'لاما بسيطة مملوءة بالسلع الأساسية لتخرج من نهاية العالم الأولى. تحتوي على 3 عناصر.
  ',
              'ja' => '最初のアポカリプスを乗り切れるよう、基本グッズを詰め込んだシンプルなラマ。アイテムが3個以上入っている。
  ',
              'pl' => 'Zwykła lama wypchana podstawowymi rzeczami, które pomogą ci przetrwać pierwszą apokalipsę. Zawiera co najmniej 3 przedmioty. PRO100Kąt pozdrawia wszystkich Polaków.
  ',
              'es-419' => 'Una llama simple llena de productos básicos para que puedas sobrevivir a tu primer apocalipsis. Contiene al menos 3 objetos.
  ',
              'tr' => 'İlk kıyametinden sağ salim çıkabilmen için gerekli temel ürünlerle doldurulmuş basit bir lama. En az 3 öğe içerir.
  ',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'CardPack:cardpack_basic',
                'quantity' => 1,
              ),
            ),
          ),
          2 => 
          array (
            'offerId' => '73216346454B1B2892DDA381C75E1BCB',
            'devName' => 'Mini Llama Manual Default - Low SharedDisplayPriority',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 0,
                'finalPrice' => 0,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 0,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'RequireFulfillment',
                'requiredId' => '82ADCC874CFC2D47927208BAE871CF2B',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'metaAssetInfo' => 
            array (
              'structName' => 'FortCatalogMeta',
              'payload' => 
              array (
                'chaseItems' => 
                array (
                  0 => 'FortWorkerType\'/Game/Items/Workers/WorkerBasic_UC_T02.WorkerBasic_UC_T02\'',
                  1 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Melee/Blunt/Tools/Hammer_Heavy/SID_Blunt_Hammer_Heavy_UC_Ore_T02.SID_Blunt_Hammer_Heavy_UC_Ore_T02\'',
                  2 => 'FortWorkerType\'/Game/Items/Workers/Managers/ManagerDoctor_UC_T01.ManagerDoctor_UC_T01\'',
                ),
                'packDefinition' => 'FortCardPackItemDefinition\'/Game/Items/CardPacks/CardPack_Basic.CardPack_Basic\'',
              ),
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Mini-Belohnungslama',
              'ru' => 'Мини-лама с наградой',
              'ko' => '미니 보상 라마',
              'en' => 'Mini Reward Llama',
              'it' => 'Lama miniricompensa',
              'fr' => 'Mini lama à récompense',
              'es' => 'Minillama de recompensa',
              'ar' => 'لاما جوائز مصغرة',
              'ja' => 'ミニ報酬ラマ',
              'pl' => 'Minilama',
              'es-419' => 'Minillama de recompensa',
              'tr' => 'Mini Ödül Laması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Ein einfaches Lama, das mit allerlei gewöhnlichen Dingen gefüllt ist, um dich durch deine erste Apokalypse zu bringen. Enthält mindestens 3 Gegenstände.
  ',
              'ru' => 'Простенькая лама, набитая самыми важными вещами, которые помогут вам пережить ваш первый апокалипсис. Содержит по меньшей мере 3 предмета.
  ',
              'ko' => '첫 종말에서 생존을 도와줄 기본적인 물품이 담긴 단촐한 라마입니다. 최소 아이템 3개를 얻을 수 있습니다!
  ',
              'en' => 'A simple llama stuffed with basic goods to get you through your first apocalypse. Contains at least 3 items.
  ',
              'it' => 'Lama comune carico di oggetti base con cui affrontare la tua prima apocalisse. Include almeno 3 oggetti.
  ',
              'fr' => 'Un lama rempli de marchandises de base pour vous permettre de survivre à votre première apocalypse. Contient au moins 3 objets.
  ',
              'es' => 'Una simple llama rellena de artículos básicos con los que sobrevivir a tu primer apocalipsis. Contiene al menos 3 objetos.
  ',
              'ar' => 'لاما بسيطة مملوءة بالسلع الأساسية لتخرج من نهاية العالم الأولى. تحتوي على 3 عناصر.
  ',
              'ja' => '最初のアポカリプスを乗り切れるよう、基本グッズを詰め込んだシンプルなラマ。アイテムが3個以上入っている。
  ',
              'pl' => 'Zwykła lama wypchana podstawowymi rzeczami, które pomogą ci przetrwać pierwszą apokalipsę. Zawiera co najmniej 3 przedmioty. PRO100Kąt pozdrawia wszystkich Polaków.
  ',
              'es-419' => 'Una llama simple llena de productos básicos para que puedas sobrevivir a tu primer apocalipsis. Contiene al menos 3 objetos.
  ',
              'tr' => 'İlk kıyametinden sağ salim çıkabilmen için gerekli temel ürünlerle doldurulmuş basit bir lama. En az 3 öğe içerir.
  ',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'CardPack:cardpack_basic',
                'quantity' => 1,
              ),
            ),
          ),
        ),
      ),
      6 => 
      array (
        'name' => 'CardPackStorePreroll',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => 'D2E08EFA731D437B85B7340EB51A5E1D',
            'devName' => 'Always.UpgradePack.01',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 50,
                'dynamicRegularPrice' => 50,
                'finalPrice' => 50,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 50,
              ),
            ),
            'meta' => 
            array (
              'MaxConcurrentPurchases' => '-1',
              'Preroll' => 'True',
              'ProfileId' => 'campaign',
              'EventLimit' => '-1',
            ),
            'metaAssetInfo' => 
            array (
              'structName' => 'FortCatalogMeta',
              'payload' => 
              array (
                'chaseItems' => 
                array (
                  0 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Ranged/Assault/Raygun/SID_Assault_Raygun_VR_Ore_T01.SID_Assault_Raygun_VR_Ore_T01\'',
                  1 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Melee/Blunt/Tools/Hammer_Heavy/SID_Blunt_Hammer_Heavy_R_Ore_T01.SID_Blunt_Hammer_Heavy_R_Ore_T01\'',
                  2 => 'FortWorkerType\'/Game/Items/Workers/Managers/ManagerDoctor_R_T01.ManagerDoctor_R_T01\'',
                ),
                'packDefinition' => 'FortCardPackItemDefinition\'/Game/Items/CardPacks/CardPack_Bronze.CardPack_Bronze\'',
              ),
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'metaInfo' => 
            array (
              0 => 
              array (
                'key' => 'MaxConcurrentPurchases',
                'value' => '-1',
              ),
              1 => 
              array (
                'key' => 'Preroll',
                'value' => 'True',
              ),
              2 => 
              array (
                'key' => 'ProfileId',
                'value' => 'campaign',
              ),
              3 => 
              array (
                'key' => 'EventLimit',
                'value' => '-1',
              ),
            ),
            'displayAssetPath' => '/Game/Items/CardPacks/CardPack_Bronze.CardPack_Bronze',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'CardPack:cardpack_bronze',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Upgrade-Lama',
              'ru' => 'Лама с улучшениями',
              'ko' => '업그레이드 라마',
              'en' => 'Upgrade Llama',
              'it' => 'Lama plus',
              'fr' => 'Lama amélioré',
              'es' => 'Llama mejorable',
              'ar' => 'لاما الترقية',
              'ja' => 'アップグレードラマ',
              'pl' => 'Ulepszlama',
              'es-419' => 'Llama de mejoras',
              'tr' => 'Geliştirme Laması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Das treue alte Lama, vollgepackt mit einer Fülle toller Sachen und Upgrade-Materialien. Enthält mindestens 4 Gegenstände, darunter ein seltener Gegenstand oder ein Held! Hat eine hohe Chance, sich aufzurüsten.',
              'ru' => 'Старая добрая лама, набитая полезными вещами и материалами для улучшений. Содержит как минимум 4 предмета, включая один редкий предмет или героя. Высокая вероятность получить улучшение.',
              'ko' => '다양한 물건과 업그레이드 재료가 담긴 믿음직한 라마입니다. 희귀 아이템이나 영웅을 포함해 최소 4개의 아이템이 들어있습니다! 업그레이드 확률이 높습니다.',
              'en' => 'The old faithful llama, packed with a variety of goodies and upgrade materials. Contains at least 4 items, including a rare item or a hero! Has a high chance to upgrade.',
              'it' => 'Il caro vecchio lama, carico di oggetti e materiali da potenziamento. Include almeno 4 oggetti, di cui un oggetto o un eroe rari! Probabilità elevata di potenziamento.',
              'fr' => 'Un bon vieux lama, plein de marchandises et de matériaux d\'amélioration divers et variés. Contient au moins 4 objets, dont un objet rare ou un héros. A de fortes chances de gagner en valeur.',
              'es' => 'La vieja y querida llama de siempre, atiborrada con una variedad de artículos y de materiales de mejora. Contiene al menos 4 objetos, ¡entre ellos un objeto raro o un héroe! Tiene una alta probabilidad de mejorarse.',
              'ar' => 'اللاما المخلصة القديمة المكدسة بمجموعة متنوعة من السلع ومواد الترقية. يحتوي على 4 عناصر على الأقل، تشتمل على عنصر نادر أو بطل! لديه فرصة كبيرة للترقية.',
              'ja' => '様々なアイテムやアップグレード用素材が詰まった、安心定番のラマ。レアアイテム1個、またはヒーロー1体を含む4個以上のアイテムが入っている！ 高確率でアップグレードのチャンスあり。',
              'pl' => 'Stara dobra lama, pełna różnych skarbów i materiałów do ulepszania. Zawiera przynajmniej 4 elementy. Jednym z nich jest na pewno rzadki przedmiot lub bohater. Ma duże szanse na ulepszenie. PRO100Kąt pozdrawia wszystkich Polaków.',
              'es-419' => 'La llama siempre fiel, llena de una variedad de productos y materiales de mejora. Contiene al menos 4 objetos, ¡incluido un héroe u objeto raro! Tiene una alta probabilidad de mejora.',
              'tr' => 'Çeşitli ürünler ve geliştirme malzemeleri ile doldurulmuş bildiğimiz lama. Nadir bir eşya veya kahraman da dahil olmak üzere en az 4 eşya içerir! Geliştirme şansı yüksektir.',
            ),
            'catalogGroup' => 'Upgrade',
            'catalogGroupPriority' => 2,
            'fulfillmentClass' => 'com.epicgames.fortnite.core.game.fulfillments.PrerollFulfillment',
          ),
          1 => 
          array (
            'offerId' => '2D09C70ABD0049EBAF1D4054127287FF',
            'devName' => 'Always.Jackpot.01',
            'fulfillmentIds' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'categories' => 
            array (
            ),
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 500,
                'dynamicRegularPrice' => 500,
                'finalPrice' => 500,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 500,
              ),
            ),
            'meta' => 
            array (
              'MaxConcurrentPurchases' => '-1',
              'Preroll' => 'True',
              'ProfileId' => 'campaign',
              'EventLimit' => '-1',
            ),
            'matchFilter' => '',
            'filterWeight' => 0,
            'appStoreId' => 
            array (
            ),
            'requirements' => 
            array (
            ),
            'offerType' => 'StaticPrice',
            'refundable' => false,
            'metaInfo' => 
            array (
              0 => 
              array (
                'key' => 'MaxConcurrentPurchases',
                'value' => '-1',
              ),
              1 => 
              array (
                'key' => 'Preroll',
                'value' => 'True',
              ),
              2 => 
              array (
                'key' => 'ProfileId',
                'value' => 'campaign',
              ),
              3 => 
              array (
                'key' => 'EventLimit',
                'value' => '-1',
              ),
            ),
            'metaAssetInfo' => 
            array (
              'structName' => 'FortCatalogMeta',
              'payload' => 
              array (
                'chaseItems' => 
                array (
                  0 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Ranged/Assault/Hydraulic/SID_Assault_Hydraulic_Drum_SR_Ore_T01.SID_Assault_Hydraulic_Drum_SR_Ore_T01\'',
                  1 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Ranged/Sniper/TripleShot/SID_Sniper_TripleShot_VR_Ore_T01.SID_Sniper_TripleShot_VR_Ore_T01\'',
                  2 => 'FortHeroType\'/Game/Heroes/Outlander/ItemDefinition/HID_Outlander_010_M_SR_T01.HID_Outlander_010_M_SR_T01\'',
                  3 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Melee/Piercing/Spear_High/SID_Piercing_Spear_SR_Ore_T01.SID_Piercing_Spear_SR_Ore_T01\'',
                  4 => 'FortHeroType\'/Game/Heroes/Ninja/ItemDefinition/HID_Ninja_010_F_SR_T01.HID_Ninja_010_F_SR_T01\'',
                  5 => 'FortSchematicItemDefinition\'/Game/Items/Schematics/Ranged/Shotgun/Scavenger/SID_Shotgun_SemiAuto_Scavenger_SR_Ore_T01.SID_Shotgun_SemiAuto_Scavenger_SR_Ore_T01\'',
                ),
                'packDefinition' => 'FortCardPackItemDefinition\'/Game/Items/CardPacks/CardPack_Jackpot.CardPack_Jackpot\'',
              ),
            ),
            'displayAssetPath' => '/Game/Items/CardPacks/CardPack_Jackpot.CardPack_Jackpot',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'CardPack:cardpack_jackpot',
                'quantity' => 1,
              ),
            ),
            'additionalGrants' => 
            array (
            ),
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Legendäres Trollschatz-Lama',
              'ru' => 'Лама с легендарной заначкой тролля',
              'ko' => '전설 트롤 상자 라마',
              'en' => 'Legendary Troll Stash Llama',
              'it' => 'Lama Tesoro Troll leggendario',
              'fr' => 'Lama à butin de Troll légendaire',
              'es' => 'Llama de alijo de trol legendario',
              'ar' => 'لاما مخبأ الأقزام الأسطوري',
              'ja' => 'トロールのお宝ラマ(レジェンド)',
              'pl' => 'Legendarna lama ze skrytki trolla',
              'es-419' => 'Llama de provisión trol legendaria',
              'tr' => 'Efsanevi Trol Zulası Laması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Eine ganze Suite voller toller Sachen, direkt aus dem Lager vom Troll um die Ecke! Enthält mindestens 8 absolut legal erstandene Gegenstände.',
              'ru' => 'Груда всяких вкусностей из заначки вашего местного тролля! Содержит как минимум 8 совершенно точно не краденых предметов.',
              'ko' => '주변 트롤 상자에서 얻어온 물건입니다! 최소 8개의 아이템을 획득할 수 있습니다. 훔친 물건은 절대... 아닐걸요?',
              'en' => 'An entire suite of goodies, direct from your local troll\'s stash! Contains at least 8 definitely-not-stolen items.',
              'it' => 'Un\'intera raccolta di oggetti provenienti da tesori Troll a chilometro zero! Include almeno 8 oggetti assolutamente non rubati.',
              'fr' => 'Un lot de marchandises directement tirées du butin de Troll le plus proche ! Contient au moins 8 objets. Dont aucun n\'a été volé. Promis.',
              'es' => '¡Un surtido completo de artículos que procede directamente del alijo de tu trol convecino! Contiene al menos 8 objetos obtenidos de forma indudablemente legal.',
              'ar' => 'مجموعة كاملة من المقتنيات مباشرةً من مخبأ الأقزام المحلي الخاص بك! تحتوي على 8 عناصر على الأقل غير مسروقة قطعًا. ',
              'ja' => 'アイテムをドンと一式、近所にあるトロールの隠れ家から直送！ もちろん盗品じゃないアイテムが8個以上入っている。',
              'pl' => 'Cały zestaw skarbów prosto ze skrytki miejscowego trolla! Zawiera przynajmniej 8 przedmiotów (na pewno nie kradzionych). PRO100Kąt pozdrawia wszystkich Polaków.',
              'es-419' => '¡Un conjunto completo de productos, directo de las provisiones de tu trol local! Contiene al menos 8 objetos que definitivamente no fueron robados.',
              'tr' => 'Mahallenizin trolünün zulasından çıkarılmış bir grup ürün! En az 8 tane kesinlikle çalıntı olmayan öğe içerir.',
            ),
            'catalogGroup' => 'Shared',
            'catalogGroupPriority' => 2,
            'fulfillmentClass' => 'com.epicgames.fortnite.core.game.fulfillments.PrerollFulfillment',
          ),
        ),
      ),
      7 => 
      array (
        'name' => 'CardPackStoreGameplay',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => '1F6B613D4B7BAD47D8A93CAEED2C4996',
            'devName' => 'Mini Llama Manual Tutorial - high SharedDisplayPriority',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => 'AccountResource:voucher_basicpack',
                'regularPrice' => 0,
                'dynamicRegularPrice' => 0,
                'finalPrice' => 0,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 0,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => 1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '82ADCC874CFC2D47927208BAE871CF2B',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
              0 => 
              array (
                'key' => 'bUseSharedDisplay',
                'value' => 'true',
              ),
              1 => 
              array (
                'key' => 'SharedDisplayPriority',
                'value' => '999999',
              ),
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Mini-Belohnungslama',
              'ru' => 'Мини-лама с наградой',
              'ko' => '미니 보상 라마',
              'en' => 'Mini Reward Llama',
              'it' => 'Lama miniricompensa',
              'fr' => 'Mini lama à récompense',
              'es' => 'Minillama de recompensa',
              'ar' => 'لاما جوائز مصغرة',
              'ja' => 'ミニ報酬ラマ',
              'pl' => 'Minilama',
              'es-419' => 'Minillama de recompensa',
              'tr' => 'Mini Ödül Laması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Ein einfaches Lama, das mit allerlei gewöhnlichen Dingen gefüllt ist, um dich durch deine erste Apokalypse zu bringen. Enthält mindestens 3 Gegenstände.
  ',
              'ru' => 'Простенькая лама, набитая самыми важными вещами, которые помогут вам пережить ваш первый апокалипсис. Содержит по меньшей мере 3 предмета.
  ',
              'ko' => '첫 종말에서 생존을 도와줄 기본적인 물품이 담긴 단촐한 라마입니다. 최소 아이템 3개를 얻을 수 있습니다!
  ',
              'en' => 'A simple llama stuffed with basic goods to get you through your first apocalypse. Contains at least 3 items.
  ',
              'it' => 'Lama comune carico di oggetti base con cui affrontare la tua prima apocalisse. Include almeno 3 oggetti.
  ',
              'fr' => 'Un lama rempli de marchandises de base pour vous permettre de survivre à votre première apocalypse. Contient au moins 3 objets.
  ',
              'es' => 'Una simple llama rellena de artículos básicos con los que sobrevivir a tu primer apocalipsis. Contiene al menos 3 objetos.
  ',
              'ar' => 'لاما بسيطة مملوءة بالسلع الأساسية لتخرج من نهاية العالم الأولى. تحتوي على 3 عناصر.
  ',
              'ja' => '最初のアポカリプスを乗り切れるよう、基本グッズを詰め込んだシンプルなラマ。アイテムが3個以上入っている。
  ',
              'pl' => 'Zwykła lama wypchana podstawowymi rzeczami, które pomogą ci przetrwać pierwszą apokalipsę. Zawiera co najmniej 3 przedmioty. PRO100Kąt pozdrawia wszystkich Polaków.
  ',
              'es-419' => 'Una llama simple llena de productos básicos para que puedas sobrevivir a tu primer apocalipsis. Contiene al menos 3 objetos.
  ',
              'tr' => 'İlk kıyametinden sağ salim çıkabilmen için gerekli temel ürünlerle doldurulmuş basit bir lama. En az 3 öğe içerir.
  ',
            ),
            'displayAssetPath' => '/Game/Items/CardPacks/CardPack_Basic.CardPack_Basic',
            'itemGrants' => 
            array (
              0 => 
              array (
                'templateId' => 'CardPack:cardpack_basic',
                'quantity' => 1,
              ),
            ),
          ),
        ),
      ),
      8 => 
      array (
        'name' => 'BRSeason2',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => 'C3BA14F04F4D56FC1D490F8011B56553',
            'devName' => 'BR.Season2.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 1800,
                'finalPrice' => 950,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2B4936F24F3179416FEFD49DA5C4B64C',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Saison 2: 14. Dezember - 20. Februar
  
  Erhalte sofort diese Gegenstände im Wert von über 2.000 V-Bucks!
    • Blauer Knappe (Outfit)
    • +50 % Saison-Match-EP
    • +10 % Saison-Match-EP für Freunde
    • Zusätzliche tägliche Battle-Pass-Herausforderung
  
  Spiele weiter und levele deinen Battle Pass auf, um über 65 Belohnungen im Wert von 12.000 V-Bucks freizuschalten (im Normalfall werden 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Level kaufen!
    • Schwarzer Ritter und 2 weitere Outfits
    • 3 Erntewerkzeuge
    • 2 Hängegleiter
    • 1.000 V-Bucks
    • +60 % Saison-Match-EP
    • +20 % Saison-Match-EP für Freunde
    • 2 animierte Emotes
    • 13 2D-Emoticons
    • und vieles mehr!',
              'ru' => 'Второй сезон: 14 декабря — 20 февраля
  
  Сразу же получите предметы стоимостью более 2000 В-баксов!
    • Экипировка Синего оруженосца;
    • +50% к опыту за матчи сезона;
    • +10% к опыту друзей за матчи сезона;
    • дополнительное ежедневное испытание по боевому пропуску.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут более 65 наград суммарной стоимостью 12 000 В-баксов! Обычно, чтобы открыть все награды, требуется 75–120 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • Экипировка Чёрного рыцаря и ещё 2 костюма;
    • 3 кирки;
    • 2 дельтаплана;
    • 1000 В-баксов;
    • +60% к опыту за матчи сезона;
    • +20% к опыту друзей за матчи сезона;
    • 2 анимированных эмоции;
    • 13 эмотиконов;
    • и это ещё не всё!',
              'ko' => '시즌 2: 12월 14일 - 2월 20일
  
  2000 V-Bucks 이상의 가치가 있는 아이템을 즉시 받아가세요.
    • 청색 견습기사 의상
    • 50% 보너스 시즌 매치 경험치
    • 10% 보너스 시즌 친구 매치 경험치
    • 배틀패스 일일 도전 추가
  
  게임을 플레이하면서 배틀패스 레벨을 올려보세요. 12,000 V-Bucks의 가치가 있는 65개 이상의 보상을 얻을 수 있습니다(보통 75-150시간 정도 소요). 더 빠르게 달성하고 싶으신가요? V-Bucks를 사용해서 언제든지 레벨을 구매할 수 있습니다!
    • 흑기사 및 의상 2개
    • 수확 도구 3개
    • 글라이더 2개
    • 1000 V-Bucks
    • 60% 보너스 시즌 매치 경험치
    • 20% 보너스 시즌 친구 매치 경험치
    • 애니메이션 이모트 2개
    • 2D 이모트 13개
    • 그 외 혜택!',
              'zh-hant' => '第2賽季：12月14日-2月20日
  
  立即獲得總值超過2000V幣的下列物品！
  •堡壘騎士服裝
  •額外50%賽季匹配經驗
  •額外10%好友賽季匹配經驗
  •追加英雄季卡每日挑戰
  
  遊玩升級英雄季卡，解鎖價值12000V幣的65個以上獎勵(遊戲時間通常為75至150小時)。想要儘早獲得？你也可以使用V幣隨時購買升級！
  •3套服裝
  •3個採集工具
  •2架滑翔傘
  •1000V幣
  •額外60%賽季匹配經驗
  •額外20%好友賽季匹配經驗
  •2個動畫表情
  •13個2D表情符號
  •還有更多獎勵！',
              'pt-br' => 'Temporada 2: 14 de dezembro — 20 de fevereiro
  
  Receba instantaneamente estes itens avaliados em mais de 2.000 V-Bucks!
    • Traje Escudeiro Azul
    • 50% de Bônus de EXP da Temporada em Partidas
    • 10% de Bônus de EXP da Temporada em Partidas com Amigos
    • Desafio Diário de Passe de Batalha Extra
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 65 recompensas avaliadas em 12.000 V-Bucks (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar níveis a qualquer momento!
    • Cavaleiro Negro e mais 2 outros trajes
    • 3 Ferramentas de Coleta
    • 2 Asas-deltas
    • 1.000 V-Bucks
    • 60% de Bônus de EXP da Temporada em Partidas
    • 20% de Bônus de EXP da Temporada em Partidas com Amigos
    • 2 Gestos Animados
    • 13 Gestos 2D
    • e mais!',
              'en' => 'Season 2: Dec 14 - Feb 20
  
  Instantly get these items valued at over 2000 V-Bucks.
    • Blue Squire Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Extra Battle Pass Daily Challenge
  
  Play to level up your Battle Pass, unlocking up to 65+ rewards worth 12,000 V-Bucks (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy levels any time!
    • Black Knight plus 2 other outfits
    • 3 Harvesting Tools
    • 2 Gliders
    • 1000 V-Bucks
    • 60% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • 2 Animated Emotes
    • 13 2D Emotes
    • and more!',
              'it' => 'Stagione 2: 14 dic. - 20 feb.
  
  Ottieni subito una valutazione di questi oggetti a 2000 V-buck!
    • Costume Scudiero blu
    • Bonus del 50% dei PE partite stagionali
    • Bonus del 10% dei PE partite amico
    • Sfida giornaliera Pass battaglia extra
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando fino a 65+ ricompense dal valore di 12.000 V-buck (necessarie tra le 75-150 ore di gioco). Vuoi tutto più in fretta? Puoi usare i V-buck per acquistare i livelli in qualsiasi momento!
    • Cavaliere nero e altri 2 costumi
    • 3 strumenti di raccolta
    • 2 deltaplani
    • 1000 V-buck
    • Bonus del 60% dei PE partite stagionali
    • Bonus del 20% dei PE partite amico
    • 2 emoticon animate
    • 13 emoticon 2D
    • e molto altro ancora!',
              'fr' => 'Saison 2 : 14 déc. - 20 fév.
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 2000 V-bucks.
   • Tenue d\'écuyer bleu
   • Bonus d\'EXP de saison de 50%
   • Bonus d\'EXP de saison de 10% pour des amis
   • Un défi quotidien du Passe de combat supplémentaire
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 65 récompenses d\'une valeur de 12 000 V-bucks (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
   • Chevalier noir, ainsi que deux autres tenues
   • 3 outils de collecte
   • 2 planeurs
   • 1000 V-bucks
   • Bonus d\'EXP de saison de 60%
   • Bonus d\'EXP de saison de 20% pour des amis
   • 2 emotes animées
   • 13 emotes en 2D
   • Et plus !',
              'zh-cn' => '第2赛季：12月14日-2月20日
  
  立即获得总值超过2000V币的下列物品！
  •堡垒骑士服装
  •额外50%赛季匹配经验
  •额外10%好友赛季匹配经验
  •追加英雄季卡每日挑战
  
  游玩升级英雄季卡，解锁价值12000V币的65个以上奖励(游戏时间通常为75至150小时)。想要尽早获得？你也可以使用V币随时购买升级！
  •3套服装
  •3个采集工具
  •2架滑翔伞
  •1000V币
  •额外60%赛季匹配经验
  •额外20%好友赛季匹配经验
  •2个动画表情
  •13个2D表情符号
  •还有更多奖励！ ',
              'es' => 'Temporada 2: 14 dic - 20 feb
  
  Consigue instantáneamente estos objetos valorados en más de 2000 paVos.
    • Traje de escudero azul.
    • Bonificación de PE de partida de temporada del 50%.
    • Bonificación de PE de partida amistosa de temporada del 10%.
    • Desafío diario del pase de batalla adicional.
  
  Juega para subir de nivel tu pase de batalla y desbloquea más de 65 recompensas con un valor de 12000 paVos (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para subir de nivel siempre que quieras!
    • Caballero negro más otros 2 trajes.
    • 3 herramientas de recolección.
    • 2 alas delta.
    • 1000 paVos.
    • Bonificación de PE de partida de temporada del 60%.
    • Bonificación de PE de partida amistosa de temporada del 20%.
    • 2 gestos animados.
    • 13 gestos 2D.
    • ¡Y mucho más!',
              'ar' => 'Season 2: Dec 14 - Feb 20
  
  Instantly get these items valued at over 2000 V-Bucks.
    • Blue Squire Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Extra Battle Pass Daily Challenge
  
  Play to level up your Battle Pass, unlocking up to 65+ rewards worth 12,000 V-Bucks (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy levels any time!
    • Black Knight plus 2 other outfits
    • 3 Harvesting Tools
    • 2 Gliders
    • 1000 V-Bucks
    • 60% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • 2 Animated Emotes
    • 13 2D Emotes
    • and more!',
              'ja' => 'シーズン2: 12月14日～2月20日
  
  2000 V-Bucks分のアイテムをすぐに入手しましょう。
    ・ブルースクワイアー
    ・シーズンマッチXPの50%ボーナス
    ・シーズンフレンドマッチXPの10%ボーナス
    ・追加のバトルパス・デイリーチャレンジ
  
  プレイしてバトルパスのレベルを上げると、12000 V-Bucks分の報酬を最大65個以上アンロックできます(およそ75～150時間程度のプレイが必要)。すぐに報酬が欲しい場合は、V-Bucksでいつでもティアを購入することができます！
    ・ブラックナイトコスチュームとさらに他のコスチューム2点
    ・収集ツールx3
    ・グライダーx2
    ・1000 V-Bucks
    ・シーズンマッチXPの60%ボーナス
    ・シーズンフレンドマッチXPの20%ボーナス
    • 動くエモートx2
    ・2Dエモートx13
    ・他にも色々！',
              'pl' => 'Sezon 2: 14 grudnia - 20 lutego
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 2000 V-dolców!
    • Strój: „Niebieski Giermek”
    • Sezonowa premia +50% PD za grę
    • Sezonowa premia +10% PD za grę ze znajomym
    • Dodatkowe wyzwanie dnia z karnetu bojowego
  
  Graj dalej, aby awansować karnet bojowy i zdobyć ponad 65 kolejnych nagród o wartości ponad 12 000 V-dolców (ich zebranie normalnie zajmuje od 75 do 150 godz. gry). Chcesz się rozwijać szybciej? W każdej chwili możesz kupić poziomy za V-dolce!
    • Czarny Rycerz plus 2 inne stroje
    • 3 zbieraki
    • 2 lotnie
    • 1000 V-dolców
    • Sezonowa premia +60% PD za grę
    • Sezonowa premia +20% PD za grę ze znajomym
    • 2 animowane emotki
    • 13 emotek 2D
    • I dużo więcej!',
              'es-419' => 'Temporada 2: 14 dic - 20 feb
  
  ¡Obtén al instante estos objetos que cuestan más de 2000 monedas V!
    • Atuendo Escudero azul
    • 50 % de bonificación de PE para partidas de la temporada
    • 10 % de bonificación de PE para partidas con amigos en la temporada
    • Desafío diario de pase de batalla adicional
  
  Juega para subir de nivel tu pase de batalla y desbloquea hasta más de 65 recompensas con un valor de 12.000 monedas V (esto lleva entre 75 y 150 horas de juego). ¿Lo quieres todo más rápido? ¡Puedes utilizar monedas V para comprar niveles cuando quieras!
    • Caballero negro más otros 2 atuendos
    • 3 herramientas de recolección
    • 2 planeadores
    • 1000 monedas V
    • 60 % de bonificación de PE para partidas de la temporada
    • 20 % de bonificación de PE para partidas con amigos en la temporada
    • 2 gestos animados
    • 13 gestos 2D
    • ¡Y mucho más!',
              'tr' => '2. Sezon: 14 Aralık - 20 Şubat
  
  2000 V-Papel’in üzerinde değeri olan bu içeriklere hemen sahip ol.
    • Mavi Şövalye Kıyafeti
    • %50 Bonus Sezonluk Maç TP\'si
    • %10 Bonus Sezonluk Arkadaş Maçı TP\'si
    • İlave Savaş Bileti Günlük Görevi
  
  Oynayarak Savaş Bileti’nin seviyesini yükselt ve 12.000 V-Papel değerindeki (normalde 75-150 saat oynayarak elde edilebilen) 65\'in üzerinde ödülün kilidini aç. Hepsine daha çabuk mu sahip olmak istiyorsun? İstediğin zaman aşama satın almak için V-Papel kullanabilirsin!
    • Kara Şövalye ve 2 kıyafet daha
    • 3 Toplama Aleti
    • 2 Planör
    • 1000 V-Papel
    • %60 Bonus Sezonluk Maç TP\'si
    • %20 Bonus Sezonluk Arkadaş Maçı TP\'si
    • 2 Animasyonlu İfade
    • 13 2B İfade
    • ve daha fazlası!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season2_BattlePass.DA_BR_Season2_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => 'F86AC2ED4B3EA4B2D65EF1B2629572A0',
            'devName' => 'BR.Season2.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Level',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 레벨',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Nível de Passe de Batalha',
              'en' => 'Battle Pass Level',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Niveau de Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Pase de batalla de nivel',
              'ar' => 'Battle Pass Level',
              'ja' => 'バトルバスレベル',
              'pl' => 'Poziom karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 얻어보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => 'ステキな報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödüllerin sahibi ol!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      9 => 
      array (
        'name' => 'BRSeason3',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => '70487F4C4673CC98F2FEBEBB26505F44',
            'devName' => 'BR.Season3.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2B4936F24F3179416FEFD49DA5C4B64B',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Nuovo pacchetto battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison 3: 22. Februar – 30. April
  
  Erhalte sofort diese Gegenstände im Wert von über 8.000 V-Bucks.
    • Missionsspezialist (Outfit)
    • Rostmeister (Outfit)
    • Sägezahn (Erntewerkzeug)
    • Regenbogenritt (Hängegleiter)
    • Regenbogen (Flugspur)
    • +70 % Saison-Match-EP
    • +20 % Saison-Match-EP für Freunde
    • Zugang zu Wöchentlichen Herausforderungen
    • und noch mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um über 75 weitere Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
    • Der Sensenmann und 3 weitere Outfits
    • 1 Erntewerkzeug
    • 1 Hängegleiter
    • 2 Rücken-Accessoires
    • 4 Flugspuren
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Третий сезон: 22 февраля — 30 апреля
  
  Сразу же получите предметы стоимостью более 8000 В-баксов!
    • Экипировка «Миссия выполнима»;
    • Экипировка «Повелитель ржавчины»;
    • Кирка «Пилозуб»;
    • Дельтаплан «Радужный гонщик»;
    • Радужный след при падении;
    • +70% к опыту за матчи сезона;
    • +20% к опыту друзей за матчи сезона;
    • доступ к еженедельным испытаниям.
    • и это не всё!
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут более 75 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
   • Экипировка «Душегуб» и ещё 3 костюма;
    • 1 кирка;
    • 1 дельтаплан;
    • 2 украшения на спину;
    • 4 воздушных следа при падении;
    • 1300 В-баксов;
    • и это ещё не всё!',
              'ko' => '시즌 3: 2월 22일 - 4월 30일
  
  8000 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 우주선 비행사 의상
    • 고철왕 의상
    • 톱날 수확 도구
    • 무지개 글라이더
    • 무지개 스카이다이빙 트레일
    • 70% 보너스 시즌 매치 XP
    • 20% 보너스 시즌 친구 매치 XP
    • 주간 도전 이용 권한
  
  배틀패스 티어를 올려서 최대 75개 이상의 보상을 얻으세요(보통 75-150시간 소요). 더 빨리 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 사신 의상 및 다른 의상 3개
    • 수확 도구 1개
    • 글라이더 1개
    • 등 장신구 2개
    • 스카이다이빙 트레일 4개
    • 1300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第3賽季：2月22日——4月30日
  
  立即獲得這些價值8000V幣的物品。
    • 任務專家服裝
    • 廢土領主服裝
    • 鋸齒採集工具
    • 彩虹騎士滑翔傘
    • 彩虹滑翔軌跡
    • 70%額外賽季比賽經驗
    • 20%額外賽季好友比賽經驗
    •獲得每週挑戰許可權
    •以及更多！
  
  通過遊玩提升英雄季卡戰階，解鎖75個以上獎勵(通常需要75到150個小時的遊玩時間)。希望更快嗎？你可以隨時使用V幣購買戰階！
    •收割者以及其他3套服裝
    • 1個採集工具
    • 1個滑翔傘
    • 2個背部裝飾
    • 4個滑翔軌跡
    • 1300V幣
    • 以及更多獎勵！',
              'pt-br' => 'Temporada 3: 22 de fevereiro — 30 de abril
  
  Receba instantaneamente estes itens avaliados em mais de 8.000 V-Bucks!
    • Traje Especialista em Missão
    • Traje Lorde da Ferrugem
    • Ferramenta de Coleta Dente Serrilhado
    • Asa-delta Arco-íris
    • Rastro de Queda Livre Arco-íris
    • 70% de Bônus de EXP da Temporada em Partidas
    • 20% de Bônus de EXP da Temporada em Partidas com Amigos
    • Acesso a Desafios Semanais
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 75 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
    • O Ceifador e mais 3 outros trajes
    • 1 Ferramenta de Coleta
    • 1 Asa-delta
    • 2 Acessórios para as Costas
    • 4 Rastros de Queda Livre
    • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 3: Feb 22 - April 30
  
  Instantly get these items valued at over 8000 V-Bucks.
    • Mission Specialist Outfit
    • Rust Lord Outfit
    • Sawtooth Harvesting Tool
    • Rainbow Rider Glider
    • Rainbow Skydiving Trail
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Access to Weekly Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • The Reaper plus 3 other outfits
    • 1 Harvesting Tool
    • 1 Glider
    • 2 Back Blings
    • 4 Skydiving Trails
    • 1300 V-Bucks
    • and so much more!',
              'it' => 'Stagione 3: 22 feb. - 30 apr.
  
  Ottieni subito questi oggetti dal valore di oltre 8000 V-buck!
    • Costume Specialista di missione
    • Costume Signore della ruggine
    • Strumento di raccolta Dente di sega
    • Deltaplano Fantino arcobaleno
    • Scia Volo dell\'arcobaleno
    • Bonus del 70% dei PE partite stagionali
    • Bonus del 20% dei PE partite amico
    • Accesso alle sfide settimanali
    • ...e molto altro ancora!
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando oltre 75 ricompense (necessarie tra le 75-150 ore di gioco). Vuoi tutto più in fretta? Puoi usare i V-buck per acquistare i livelli in qualsiasi momento!
    • Il Mietitore e altri 3 costumi
    • 1 strumento di raccolta
    • 1 deltaplano
    • 2 Dorsi decorativi
    • 4 Scie Skydive
    • 1300 V-buck
   • ...e molto altro ancora!',
              'fr' => 'Saison 3 : 22 février - 30 avril
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 8000 V-bucks.
    • Tenue de Spationaute
    • Tenue de Roi de la rouille
    • Outil de collecte Dent de scie
    • Planeur magique
    • Traînée de condensation Arc-en-ciel
    • Bonus d\'EXP de saison de 70%
    • Bonus d\'EXP de saison de 20% pour des amis
    • L\'accès aux défis hebdomadaires
    • Et plus !
  
   Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 75 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
    • Le Faucheur, ainsi que 3 autres tenues
    • 1 outil de collecte
    • 1 planeur
    • 2 accessoires de dos
    • 4 traînées de condensation
    • 1300 V-bucks
    • Et plus !',
              'zh-cn' => '第3赛季：2月22日——4月30日
  
  立即获得这些价值8000V币的物品。
    • 任务专家服装
    • 废土领主服装
    • 锯齿采集工具
    • 彩虹骑士滑翔伞
    • 彩虹滑翔轨迹
    • 70%额外赛季比赛经验
    • 20%额外赛季好友比赛经验
    •获得每周挑战权限
    •以及更多！
  
  通过游玩提升英雄季卡战阶，解锁75个以上奖励(通常需要75到150个小时的游玩时间)。希望更快吗？你可以随时使用V币购买战阶！
    •收割者以及其他3套服装
    • 1个采集工具
    • 1个滑翔伞
    • 2个背部装饰
    • 4个滑翔轨迹
    • 1300V币
    • 以及更多奖励！',
              'es' => 'Temporada 3: 22 feb - 30 abr
  
  Consigue instantáneamente estos objetos valorados en más de 8000 paVos.
    • Traje de especialista en misiones.
    • Traje de señor del óxido.
    • Herramienta de recolección dientes de sierra.
    • Ala delta jinete arcoíris.
    • Estela de descenso arcoíris.
    • Bonificación de PE de partida de temporada del 70%.
    • Bonificación de PE de partida amistosa de temporada del 20%.
    • Acceso a los desafíos semanales.
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquea más de 75 recompensas (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
    • Señor Muerte más otros 3 trajes.
    • 1 herramienta de recolección.
    • 1 ala delta.
    • 2 popurrí de regalitos.
    • 4 estelas de descenso.
    • 1300 paVos.
    • ¡Y mucho más!',
              'ar' => 'Season 3: Feb 22 - April 30
  
  Instantly get these items valued at over 8000 V-Bucks.
    • Mission Specialist Outfit
    • Rust Lord Outfit
    • Sawtooth Harvesting Tool
    • Rainbow Rider Glider
    • Rainbow Skydiving Trail
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Access to Weekly Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • The Reaper plus 3 other outfits
    • 1 Harvesting Tool
    • 1 Glider
    • 2 Back Blings
    • 4 Skydiving Trails
    • 1300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン3: 2月22日～4月30日
  
  8000 V-Bucks以上の価値があるアイテムをすぐに手に入れよう。
    ・ミッションスペシャリストコスチューム
    ・ジャンクロードコスチューム
    ・ジャンクアックス収集ツール
    ・レインボーライダーグライダー
    ・レインボースカイダイビングトレイル
    ・シーズンマッチXPの70%ボーナス
    ・シーズンフレンドマッチXPの20%ボーナス
    ・ウィークリーチャレンジへの挑戦権
    ・他にも色々！
  
  たくさんプレイしてバトルパスのレベルを上げると、75以上の報酬をアンロックできます(およそ75～150時間程度のプレイが必要)。すぐに報酬が欲しい場合は、V-Bucksでいつでもティアを購入することができます！
    ・ザ・リーパーコスチュームとさらに他のコスチューム3点
    ・収集ツールx1
    ・グライダーx1
    ・バックアクセサリーx2
    ・スカイダイビングトレイルx4
    ・1300 V-Bucks
    ・他にも色々！',
              'pl' => 'Sezon 3: 22 lutego - 30 kwietnia
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 8000 V-dolców!
    • Strój: Specjalista od Zadań
    • Strój: Rdzawy Lord
    • Lotnia Jeźdźca Tęczy
    • Sezonowa premia +70% PD za grę
    • Sezonowa premia +20% PD za grę ze znajomym
    • Dodatkowe wyzwanie dnia z karnetu bojowego
  
  Graj dalej, aby awansować karnet bojowy i zdobyć ponad 75 kolejnych nagród (ich zebranie normalnie zajmuje od 75 do 150 godz. gry). Chcesz się rozwijać szybciej? W każdej chwili możesz kupić poziomy za V-dolce!
    • Żniwiarz plus 3 inne stroje
    • 1 zbierak
    • 1 lotnia
    • 2 plecaki
    • 4 smugi lotni
    • 1300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 3: Del 22 de feb. al 30 de abr.
  
  ¡Obtén al instante estos objetos que cuestan más de 8000 monedas V!
    • Atuendo Especialista de misión
    • Atuendo Señor del óxido
    • Herramienta de recolección Dientes de sierra
    • Planeador Jinete de arcoíris
    • Rastro de caída libre Arcoíris
    • 70% de bonificación de PE para partidas de la temporada
    • 20 % de PE de bonificación para partidas con amigos en la temporada
    • Acceso a los desafíos semanales
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquear más de 75 recompensas (esto lleva entre 75 y 150 horas de juego). ¿Lo quieres todo más rápido? ¡Puedes utilizar monedas V para comprar niveles cuando quieras!
    • Segador más otros 3 atuendos
    • 1 herramienta de recolección
    • 1 planeador
    • 2 mochilas retro
    • 4 rastros de caída libre
    • 1300 monedas V
    • ¡Y mucho más!',
              'tr' => '3. Sezon: 22 Şubat - 30 Nisan
  
  8000 V-Papel’in üzerinde değeri olan bu içerikleri hemen edin.
    • Görev Uzmanı Kıyafeti
    • Pasın Efendisi Kıyafeti
    • Testere Dişli Kazma
    • Gökkuşağının Kanatları Planörü
    • %70 Bonus Sezon Maçı TP’si
    • %20 Bonus Sezon Arkadaş Maçı TP’si
    • Haftalık Görevlere Erişim
    • ve daha pek çok şey!
  
  Savaş Bileti’nin seviyesini yükseltmek için oyna, 75’ten fazla ödülü aç (75-150 saat arası vakit alabilir)! Hepsini daha mı çabuk istiyorsun? V-Papel kullanarak aşamaları istediğin zaman açabilirsin!
    • Ölüm Meleği ve 3 kıyafet daha
    • 1 Toplama Aleti
    • 1 Planör
    • 2 Sırt Süsü
   • 4 Dalış İzi
   • 1300 V-Papel
    • ve dahası!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season3_BattlePassWithLevels.DA_BR_Season3_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => '2331626809474871A3A44C47C1D8742E',
            'devName' => 'BR.Season3.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2B4936F24F3179416FEFD49DA5C4B64B',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison 3',
              'ru' => 'Сезон 3',
              'ko' => '시즌 3',
              'zh-hant' => '第3季度',
              'pt-br' => 'Temporada 3',
              'en' => 'Season 3',
              'it' => 'Stagione 3',
              'fr' => 'Saison 3',
              'zh-cn' => '第3赛季',
              'es' => 'Temporada 3',
              'ar' => 'Season 3',
              'ja' => 'シーズン3',
              'pl' => 'Sezon 3',
              'es-419' => 'Temporada 3',
              'tr' => '3. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison 3: 22. Februar – 30. April
  
  Erhalte sofort diese Gegenstände im Wert von über 2.000 V-Bucks.
    • Missionsspezialist (Outfit)
    • +50 % Saison-Match-EP
    • +10 % Saison-Match-EP für Freunde
    • Zugang zu Wöchentlichen Herausforderungen
  
  Spiele weiter und stufe deinen Battle Pass auf, um bis zu 100 Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
    • Der Sensenmann und 4 weitere Outfits
    • 2 Erntewerkzeuge
    • 2 Hängegleiter
    • 2 Rücken-Accessoires
    • 5 Flugspuren
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Третий сезон: 22 февраля — 30 апреля
  
  Сразу же получите предметы стоимостью более 2000 В-баксов!
    • Экипировка «Миссия выполнима»;
    • +50% к опыту за матчи сезона;
    • +10% к опыту друзей за матчи сезона;
    • доступ к еженедельным испытаниям.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут до 100 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • Экипировка «Душегуб» и ещё 4 костюма;
    • 2 кирки;
    • 2 дельтаплана;
    • 2 украшения на спину;
    • 5 воздушных следов при падении;
    • 1300 В-баксов;
    • и это ещё не всё!',
              'ko' => '시즌 3: 2월 22일 - 4월 30일
  
  2000 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 우주선 비행사 의상
    • 50% 보너스 시즌 매치 XP
    • 10% 보너스 시즌 친구 매치 XP
    • 주간 도전 이용 권한
  
  배틀패스 티어를 올려서 최대 100개의 보상을 얻으세요(보통 75-150시간 소요). 더 빨리 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 사신 의상 및 다른 의상 4개
    • 수확 도구 2개
    • 글라이더 2개
    • 등 장신구 2개
    • 스카이다이빙 트레일 5개
    • 1300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第3賽季：2月22日——4月30日
  
  立即獲得這些價值2000V幣的物品。
    • 任務專家服裝
    • 50% 額外賽季比賽經驗
    • 10%額外賽季好友比賽經驗
    •獲得每週挑戰許可權
  
  通過遊玩提升英雄季卡戰階，解鎖100多個獎勵(通常需要75到150個小時的遊玩時間)。希望更快嗎？你可以隨時使用V幣購買戰階！
    •收割者以及其他4套服裝
    • 2個採集工具
    • 2個滑翔傘
    • 2個背部裝飾
    • 5個滑翔軌跡
    • 1300V幣
    • 以及更多獎勵！',
              'pt-br' => 'Temporada 3: 22 de fevereiro — 30 de abril
  
  Receba instantaneamente estes itens avaliados em mais de 2.000 V-Bucks!
    • Traje Especialista em Missão
    • 50% de Bônus de EXP da Temporada em Partidas
    • 10% de Bônus de EXP da Temporada em Partidas com Amigos
    • Acesso a Desafios Semanais
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando até 100 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
    • O Ceifador e mais 4 outros trajes
    • 2 Ferramentas de Coleta
    • 2 Asas-deltas
    • 2 Acessórios para as Costas
    • 5 Rastros de Queda Livre
    • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 3: Feb 22 - April 30
  
  Instantly get these items valued at over 2000 V-Bucks.
    • Mission Specialist Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Access to Weekly Challenges
  
  Play to level up your Battle Pass, unlocking up to 100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • The Reaper plus 4 other outfits
    • 2 Harvesting Tools
    • 2 Gliders
    • 2 Back Blings
    • 5 Skydiving Trails
    • 1300 V-Bucks
    • and so much more!',
              'it' => 'Stagione 3: 22 feb. - 30 apr.
  
  Ottieni subito questi oggetti dal valore di oltre 2000 V-buck!
    • Costume Specialista di missione
    • Bonus del 50% dei PE partite stagionali
    • Bonus del 10% dei PE partite amico
    • Accesso alle sfide settimanali
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando fino a 100 ricompense (necessarie tra le 75-150 ore di gioco). Vuoi tutto più in fretta? Puoi usare i V-buck per acquistare i livelli in qualsiasi momento!
    • Il Mietitore e altri 4 costumi
    • 2 strumenti di raccolta
    • 2 deltaplani
    • 2 Dorsi decorativi
    • 5 Scie Skydive
    • 1300 V-buck
    • ...e molto altro ancora!',
              'fr' => 'Saison 3 : 22 février - 30 avril
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 2000 V-bucks.
    • Tenue de Spationaute
    • Bonus d\'EXP de saison de 50%
    • Bonus d\'EXP de saison de 10% pour des amis
    • L\'accès aux défis hebdomadaires
  
   Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller jusqu\'à 100 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
    • Le Faucheur, ainsi que 4 autres tenues
    • 2 outils de collecte
    • 2 planeurs
    • 2 accessoires de dos
    • 5 traînées de condensation
    • 1300 V-bucks
    • Et plus !',
              'zh-cn' => '第3赛季：2月22日——4月30日
  
  立即获得这些价值2000V币的物品。
    • 任务专家服装
    • 50% 额外赛季比赛经验
    • 10%额外赛季好友比赛经验
    •获得每周挑战权限
  
  通过游玩提升英雄季卡战阶，解锁100多个奖励(通常需要75到150个小时的游玩时间)。希望更快吗？你可以随时使用V币购买战阶！
    •收割者以及其他4套服装
    • 2个采集工具
    • 2个滑翔伞
    • 2个背部装饰
    • 5个滑翔轨迹
    • 1300V币
    • 以及更多奖励！',
              'es' => 'Temporada 3: 22 feb - 30 abr
  
  Consigue instantáneamente estos objetos valorados en más de 2000 paVos.
    • Traje de especialista en misiones.
    • Bonificación de PE de partida de temporada del 50%.
    • Bonificación de PE de partida amistosa de temporada del 10%.
    • Acceso a los desafíos semanales.
  
  Juega para subir de nivel tu pase de batalla y desbloquea hasta 100 recompensas (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
    • Señor Muerte más otros 4 trajes.
    • 2 herramientas de recolección.
    • 2 alas delta.
    • 2 popurrí de regalitos.
    • 5 estelas de descenso.
    • 1300 paVos.
    • ¡Y mucho más!',
              'ar' => 'Season 3: Feb 22 - April 30
  
  Instantly get these items valued at over 2000 V-Bucks.
    • Mission Specialist Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Access to Weekly Challenges
  
  Play to level up your Battle Pass, unlocking up to 100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • The Reaper plus 4 other outfits
    • 2 Harvesting Tools
    • 2 Gliders
    • 2 Back Blings
    • 5 Skydiving Trails
    • 1300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン3: 2月22日～4月30日
  
  2000 V-Bucks以上の価値があるアイテムをすぐに手に入れよう。
    ・ミッションスペシャリスト
    ・シーズンマッチXPの50%ボーナス
    ・シーズンフレンドマッチXPの10%ボーナス
    ・ウィークリーチャレンジへの挑戦権
  
  プレイしてバトルパスのレベルを上げると、最大100個の報酬をアンロックする事ができます。すぐに報酬が欲しい場合は、V-Bucksでいつでもティアを購入する事ができます！
    ・ザ・リーパーや他のコスチューム4点
    ・ピックアックス 2点
    ・グライダー 2点
    ・バックアクセサリー 2点
    ・トレイル 5点
    ・1300 V-Bucks
    ・他にも色々！',
              'pl' => 'Sezon 3: 22 lutego - 30 kwietnia
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 2000 V-dolców!
    • Strój: Specjalista od Zadań
    • Sezonowa premia +50% PD za grę
    • Sezonowa premia +10% PD za grę ze znajomym
    • Dodatkowe wyzwanie dnia z karnetu bojowego
  
  Graj dalej, aby awansować karnet bojowy i zdobyć do 100 kolejnych nagród (ich zebranie normalnie zajmuje od 75 do 150 godz. gry). Chcesz się rozwijać szybciej? W każdej chwili możesz kupić poziomy za V-dolce!
    • Żniwiarz plus 4 inne stroje
    • 2 zbieraki
    • 2 lotnie
    • 2 plecaki
    • 5 smug lotni
    • 1300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 3: Del 22 de feb. al 30 de abr.
  
  ¡Obtén al instante estos objetos que cuestan más de 2000 monedas V!
    • Atuendo Especialista de misión
    • 50 % de bonificación de PE para partidas de la temporada
    • 10 % de PE de bonificación para partidas con amigos en la temporada
    • Acceso a los desafíos semanales
  
  Juega para subir de nivel tu pase de batalla y desbloquear hasta 100 recompensas (esto lleva entre 75 y 150 horas de juego). ¿Lo quieres todo más rápido? ¡Puedes utilizar monedas V para comprar niveles cuando quieras!
    • Segador más otros 4 atuendos
    • 2 herramientas de recolección
    • 2 planeadores
    • 2 mochilas retro
    • 5 rastros de caída libre
    • 1300 monedas V
    • ¡Y mucho más!',
              'tr' => '3. Sezon: 22 Şubat - 30 Nisan
  
  2000 V-Papel\'in üzerinde değeri olan bu içerikleri hemen edin.
    • Görev Uzmanı Kıyafeti
    • %50 Bonus Sezon Maçı TP\'si
    • %10 Bonus Sezon Arkadaş Maç TP\'si
    • Haftalık Görevlere Erişim
  
  Savaş Bileti’nin seviyesini yükseltmek için oyna, 100 ödülü de aç (75-150 saat arası vakit alabilir)! Hepsini daha mı çabuk istiyorsun? V-Papel kullanarak aşamaları istediğin zaman açabilirsin!
    • Ölüm Meleği ve 4 kıyafet daha
    • 2 Toplama Aleti
    • 2 Planör
    • 2 Sırt Süsü
   •5 Dalış İzi
   • 1300 V-Papel 
   • ve daha pek çok şey!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season3_BattlePass.DA_BR_Season3_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => 'E2D7975EFEC54A45900D8D9A6D9D273C',
            'devName' => 'BR.Season3.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Level',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 레벨',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Nível de Passe de Batalha',
              'en' => 'Battle Pass Level',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Niveau de Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Pase de batalla de nivel',
              'ar' => 'Battle Pass Level',
              'ja' => 'バトルバスレベル',
              'pl' => 'Poziom karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 얻어보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => '素晴らしい報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödüllerin sahibi ol!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      10 => 
      array (
        'name' => 'BRSeason4',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => '884CE68998C44AC58D85C5A9883DE1A6',
            'devName' => 'BR.Season4.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2B4936F24F3179416FEFD49DA5C4B64A',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Bundle battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle Pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle Pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison 4: Ab sofort bis 9. Juli
  
  Erhalte sofort diese Gegenstände im Wert von über 10.000 V-Bucks.
    • Carbide (Outfit)
    • Kriegsfalke (Outfit)
    • Teknique (Outfit) 
    • Orkanhacke (Spitzhacke)
    • Zuckerschock (Hängegleiter)
    • Standardausführung (Rücken-Accessoire)
    • 4 Spraymotive
    • Retro-Science-Fiction (Flugspur)
    • +70 % Saison-Match-EP
    • +20 % Saison-Match-EP für Freunde
    • Zugang zu Wöchentlichen Herausforderungen
    • Zugang zu Blockbuster-Herausforderungen
    • Zugang zu Carbide-Herausforderungen
    • und mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um über 75 Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
  
    • Omega und 3 weitere Outfits
    • 3 Spitzhacken
    • 4 Emotes
    • 2 Hängegleiter
    • 1 Rücken-Accessoire
    • 4 Flugspuren
    • 16 Spraymotive
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Четвёртый сезон: до 9 июля
  
  Сразу же получите предметы стоимостью более 10 000 В-баксов!
    • экипировка Карбида;
    • экипировка Боевого ястреба;
    • экипировка мисс Бэнкси;
    • кирка «Штормовая мощь»;
    • дельтаплан «Конфетка»;
    • украшение на спину «Верный стандарт»;
    • 4 граффити;
    • воздушный след «Ретрофутуризм»;
    • +70% к опыту за матчи сезона;
    • +20% к опыту друзей за матчи сезона;
    • доступ к еженедельным испытаниям;
    • доступ к испытаниям Карбида;
    • доступ к испытаниям события «Убойное кино»;
    • и это ещё не всё!
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут более 75 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • экипировка Омеги и ещё 3 костюма;
    • 3 кирки;
    • 4 эмоции;
    • 2 дельтаплана;
    • 1 украшение на спину;
    • 4 воздушных следа;
    • 16 граффити;
    • 1300 В-баксов;
    • и это ещё не всё!',
              'ko' => '시즌4: 7월 9일 종료
  
  10,000 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 카바이드 의상
    • 배틀호크 의상
    • 테크니크 아티스트 의상
    • 강풍 곡괭이
    • 슈가 크래시 글라이더
    • 보급품 배낭 등 장신구
    • 스프레이 4개
    • 복고풍 공상 과학 스카이다이빙 트레일
    • 70% 보너스 시즌 매치 XP
    • 20% 보너스 시즌 친구 매치 XP
    • 주간 도전 이용 권한
    • 블록버스터 도전 이용 권한
    • 카바이드 도전 이용 권한
  
  배틀패스 티어를 올려서 75개 이상의 보상을 획득해보세요(보통 75-150시간 소요). 더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 오메가 및 다른 의상 3개
    • 곡괭이 3개
    • 이모트 4개
    • 글라이더 2개
    • 등 장신구 1개
    • 스카이다이빙 트레일 4개
    • 스프레이 16개
    • 1,300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第4賽季：現在起至7月9日
  
  立即獲得這些價值10000V幣的物品。
    • 碳化合金服裝
    • 戰鷹服裝
    • 技巧服裝
    • 蓋爾力量鋤頭
    • 糖果風暴滑翔傘
    • 制式裝備背包
    • 4個塗鴉
    • 復古科幻滑翔軌跡
    • 70% 額外賽季比賽經驗
    • 20%額外賽季好友比賽經驗
    • 獲得每週挑戰許可權
    • 獲得爆紅挑戰許可權
    • 獲得碳化合金挑戰許可權
    • 以及更多！
  
  通過遊玩提升英雄季卡戰階，解鎖75多個獎勵(通常需要75到150個小時的遊玩時間)。希望更快嗎？你可以隨時使用V幣購買戰階！
    •歐米伽以及其他3套服裝
    •3個鋤頭
    • 4個姿勢
    • 2個滑翔傘
    • 1個背部裝飾
    • 4個滑翔軌跡
    • 16個塗鴉
    • 1300V幣
    • 以及更多獎勵！',
              'pt-br' => 'Temporada 4: de hoje até 9 de julho
  
  Receba instantaneamente estes itens avaliados em mais de 10.000 V-Bucks.
    • Traje Carboneto
    • Traje Gavião Guerreiro
    • Traje Téknica 
    • Picareta Rajada
    • Asa-delta Pancada Açucarada
    • Acessório para as Costas Padrão
    • 4 Sprays
    • Rastro de Queda Livre Ficção Científica Retrô
    • 70% de Bônus de EXP da Temporada em Partidas
    • 20% de Bônus de EXP da Temporada em Partidas com Amigos
    • Acesso a Desafios Semanais
    • Acesso a Desafios de Filmaço
    • Acesso a Desafios Carboneto
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 75 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
  
    • O Ômega e mais 3 outros trajes
    • 3 Picaretas
    • 4 Gestos
    • 2 Asas-deltas
    • 1 Acessórios para as Costas
    • 4 Rastros de Queda Livre
    • 16 Sprays
    • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 4: Now thru July 9
  
  Instantly get these items valued at over 10,000 V-Bucks.
    • Carbide Outfit
    • Battlehawk Outfit
    • Teknique Outfit 
    • Gale Force Pickaxe
    • Sugar Crash Glider
    • Standard Issue Back Bling
    • 4 Sprays
    • Retro Sci-fi Skydiving Trail
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Access to Weekly Challenges
    • Access to Blockbuster Challenges
    • Access to Carbide Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
  
    • Omega plus 3 other outfits
    • 3 Pickaxes
    • 4 Emotes
    • 2 Gliders
    • 1 Back Bling
    • 4 Skydiving Trails
    • 16 Sprays
    • 1300 V-Bucks
    • and so much more!',
              'it' => 'Stagione 4: fino al 9 luglio
  
  Ottieni subito questi oggetti dal valore di oltre 10,000 V-buck!
    • Costume Carburo
    • Costume Battlehawk
    • Costume Teknica
    • Piccone Uragano
    • Deltaplano Crash zucchero
    • Dorso decorativo Standard
    • 4 spray
    • Scia skydive Fantascienza rétro
    • Bonus del 70% dei PE partite stagionali
    • Bonus del 20% dei PE partite amico
    • Accesso alle sfide settimanali
    • Accesso alle sfide spaccatutto
    • Accesso alle sfide Carburo
    • ...e tanto altro!
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando oltre 75 ricompense (necessarie tra le 75-150 ore di gioco). Vuoi tutto più in fretta? Puoi usare i V-buck per acquistare i livelli in qualsiasi momento!
  
    • Omega e altri 3 costumi
    • 3 picconi
    • 2 deltaplani
    • 1 Dorso decorativo
    • 4 Scie Skydive
    • 16 spray
    • 1300 V-buck
    • ...e molto altro ancora!',
              'fr' => 'Saison 4 : jusqu\'au 9 juillet
  
   Recevez immédiatement ces objets d\'une valeur supérieure à 10 000 V-bucks.
    • Tenue Carburo
    • Tenue Le Faucon
    • Tenue Graffeuse 
    • Pioche Zéphyr
    • Planeur Friandise
    • Accessoire de dos Sac réglementaire
    • 4 aérosols
    • Traînée de condensation Rétrofuturiste
    • Bonus d\'EXP de saison de 70%
    • Bonus d\'EXP de saison de 20% pour des amis
    • L\'accès aux défis hebdomadaires
    • L\'accès aux défis Superproduction
    • L\'accès aux défis de Carburo
    • Et plus !
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 75 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
  
    • Oméga plus 3 autres tenues
    • 3 pioches
    • 4 emotes
    • 2 planeurs
    • 1 accessoire de dos
    • 4 traînées de condensation
    • 16 aérosols
    • 1300 V-bucks
    • Et plus !',
              'zh-cn' => '第4赛季：现在起至7月9日
  
  立即获得这些价值10000V币的物品。
    • 碳化合金服装
    • 战鹰服装
    • 技巧服装
    • 盖尔力量锄头
    • 糖果风暴滑翔伞
    • 制式装备背包
    • 4个涂鸦
    • 复古科幻滑翔轨迹
    • 70% 额外赛季比赛经验
    • 20%额外赛季好友比赛经验
    • 获得每周挑战权限
    • 获得爆红挑战权限
    • 获得碳化合金挑战权限
    • 以及更多！
  
  通过游玩提升英雄季卡战阶，解锁75多个奖励(通常需要75到150个小时的游玩时间)。希望更快吗？你可以随时使用V币购买战阶！
    •欧米伽以及其他3套服装
    •3个锄头
    • 4个姿势
    • 2个滑翔伞
    • 1个背部装饰
    • 4个滑翔轨迹
    • 16个涂鸦
    • 1300V币
    • 以及更多奖励！',
              'es' => 'Temporada 4: Desde ahora hasta el 9 de julio
  
  Consigue instantáneamente estos objetos valorados en más de 10 000 paVos.
    • Traje de Carburo
    • Traje de halcón bélico
    • Traje de Téknica 
    • Pico fuerza de la tempestad
    • Ala delta subidón de azúcar
    • Accesorio mochilero modelo estándar
    • 4 grafitis
    • Estela de descenso ciencia ficción retro
    • Bonificación de PE de partida de temporada del 70%
    • Bonificación de PE de partida amistosa de temporada del 20%.
    • Acceso a los desafíos semanales.
    • Acceso a los desafíos de Taquillazo.
    • Acceso a los desafíos de Carburo.
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquea más de 75 recompensas (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
  
    • Omega más otros 3 trajes.
    • 3 picos.
    • 4 gestos
    • 2 alas delta
    • 1 accesorio mochilero
    • 4 estelas de descenso
    • 16 grafitis
    • 1300 paVos
    • ¡Y mucho más!',
              'ar' => 'Season 4: Now thru July 9
  
  Instantly get these items valued at over 10,000 V-Bucks.
    • Carbide Outfit
    • Battlehawk Outfit
    • Teknique Outfit 
    • Gale Force Pickaxe
    • Sugar Crash Glider
    • Standard Issue Back Bling
    • 4 Sprays
    • Retro Sci-fi Skydiving Trail
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Access to Weekly Challenges
    • Access to Blockbuster Challenges
    • Access to Carbide Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
  
    • Omega plus 3 other outfits
    • 3 Pickaxes
    • 4 Emotes
    • 2 Gliders
    • 1 Back Bling
    • 4 Skydiving Trails
    • 16 Sprays
    • 1300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン4: 7月9日まで
  
  10,000 V-Bucks以上の価値があるアイテムをすぐに手に入れましょう
    ・カーバイドコスチューム
    ・バトルホークコスチューム
    ・テクニークコスチューム
    ・ゲイルフォースツルハシ
    ・シュガークラッシュグライダー
    ・標準仕様バックアクセサリー
    ・スプレー4点
    ・レトロなSFチックスカイダイビングトレイル
    ・シーズンマッチXPの70%ボーナス
    ・シーズンフレンドマッチXPの20%ボーナス
    ・ウィークリーチャレンジへの挑戦権
    ・ブロックバスターチャレンジへの挑戦権
    ・カーバイドチャレンジへの挑戦権
    ・他にも色々！
  
  プレイしてバトルパスのレベルを上げると、75以上の報酬をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！
  
    ・オメガコスチュームとさらに他のコスチュームx3
    ・ツルハシx3
    ・エモートx4
    ・グライダーx2
    バックアクセサリーx1
    スカイダイビングトレイルx4
    ・スプレーx16
    ・1300 V-Bucks
    他にも色々！',
              'pl' => 'Sezon 4: potrwa do 9 lipca
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 10 000 V-dolców:
    • Strój: Karbid
    • Strój: Bojowy Jastrząb
    • Strój: Teknique
     • Kilof: Sztormowiec
    • Lotnia: Słodki Spadek
    • Plecak: Standardowe Wyposażenie
    • 4 graffiti
    • Smuga lotni: Retro-SF
    • Sezonowa premia +70% PD za grę
    • Sezonowa premia +20% za grę ze znajomym
    • Dostęp do wyzwań tygodnia
    • Dostęp do wyzwań Hitu Ekranu
    • Dostęp do wyzwań Karbida
    • I jeszcze więcej!
  
  Graj dalej, aby awansować karnet bojowy i zdobyć ponad 75 kolejnych nagród (ich zebranie normalnie zajmuje od 75 do 150 godz. gry). Chcesz się rozwijać szybciej? W każdej chwili możesz kupić poziomy za V-dolce!
  
    • Omega plus 3 inne stroje
    • 3 kilofy
    • 4 emotki
    • 2 lotnie
    • 1 sprzęt na plecy
    • 4 smugi lotni
    • 16 graffiti
    • 1300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 4: Ahora hasta el 9 de julio
  
  ¡Obtén al instante estos objetos que cuestan más de 10 000 monedas V!
    • Atuendo Carburo
    • Atuendo Halcón de combate
    • Atuendo Téknica 
    • Pico Fuerza huracanada
    • Planeador Bajón de azúcar
    • Mochila retro Edición básica
    • 4 aerosoles
    • Rastro de caída libre Ciencia ficción retro
    • 70 % de PE de bonificación para partidas de la temporada
    • 20 % de PE de bonificación para partidas con amigos en la temporada
    • Acceso a los desafíos semanales
    • Acceso a los desafíos de Taquillazo
    • Acceso a los desafíos de Carburo
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquear más de 75 recompensas (esto lleva entre 75 y 150 horas de juego). ¿Lo quieres todo más rápido? ¡Puedes utilizar monedas V para comprar niveles cuando quieras!
  
    • Omega más otros 3 atuendos
    • 3 picos
    • 4 gestos
    • 2 planeadores
    • 1 mochila retro
    • 4 rastros de caída libre
    • 16 aerosoles
    • 1300 monedas V
    • ¡Y mucho más!',
              'tr' => '4. Sezon: Şu andan 9 Temmuz’a kadar
  
  10.000 V-Papel’in üzerinde değeri olan bu içerikleri hemen edin.
   • Demir Maske Kıyafeti
    • Savaş Şahini Kıyafeti
    • Asi Grafitici Kıyafeti
    • Kraliçenin Gücü Kazması
    • Şeker Koması Planörü
    • Standart Ekipman Sırt Süsü
    • 4 Sprey
    • Retro Bilimkurgu Hava Dalışı İzi
    • %70 Bonus Sezonluk Maç TP’si
    • %20 Bonus Sezonluk Arkadaşlar için Maç TP’si
    • Haftalık Görevlere Erişim
    • Gişe Rekortmeni Görevlerine Erişim
    • Demir Maske Görevlerine Erişim
    • ve fazlası!
  
  Battle Royale oynayarak Savaş Bileti’nin seviyesini yükselt ve 75’ten fazla ödülü aç (genelde 75 ila 150 saat oynama gerektirir). Hepsini daha hızlı almak mı istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!
  
    • Omega artı 3 kıyafet daha
    • 3 Kazma
    • 4 İfade
    • 2 Planör
    • 1 Sırt Süsü
    • 4 Hava Dalışı İzi
    • 16 Sprey
    • 1300 V-Papel
    • ve çok daha fazlası!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season4_BattlePassWithLevels.DA_BR_Season4_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => '76EA7FE9787744B09B79FF3FC5E39D0C',
            'devName' => 'BR.Season4.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2B4936F24F3179416FEFD49DA5C4B64A',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison 4',
              'ru' => 'Сезон 4',
              'ko' => '시즌 4',
              'zh-hant' => '第4賽季',
              'pt-br' => 'Temporada 4',
              'en' => 'Season 4',
              'it' => 'Stagione 4',
              'fr' => 'Saison 4',
              'zh-cn' => '第4赛季',
              'es' => 'Temporada 4',
              'ar' => 'Season 4',
              'ja' => 'シーズン4',
              'pl' => 'Sezon 4',
              'es-419' => 'Temporada 4',
              'tr' => '4. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison 4: Ab sofort bis 9. Juli
  
  Erhalte sofort diese Gegenstände im Wert von über 3.500 V-Bucks.
    • Carbide (Outfit)
    • Kriegsfalke (Outfit)
    • +50 % Saison-Match-EP
    • +10 % Saison-Match-EP für Freunde
    • Zugang zu Wöchentlichen Herausforderungen
    • Zugang zu Blockbuster-Herausforderungen
    • Zugang zu Carbide-Herausforderungen
  
  Spiele weiter und stufe deinen Battle Pass auf, um über 100 Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
    • Omega und 4 weitere Outfits
    • 4 Spitzhacken
    • 5 Emotes
    • 3 Hängegleiter
    • 2 Rücken-Accessoires
    • 5 Flugspuren
    • 20 Spraymotive
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Четвёртый сезон: до 9 июля
  
  Сразу же получите предметы стоимостью более 3500 В-баксов!
    • экипировка Карбида;
    • экипировка Боевого ястреба;
    • +50% к опыту за матчи сезона;
    • +10% к опыту друзей за матчи сезона;
    • доступ к еженедельным испытаниям;
    • доступ к испытаниям Карбида;
    • доступ к испытаниям события «Убойное кино».
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут до 100 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • экипировка Омеги и ещё 4 костюма;
    • 4 кирки;
    • 5 эмоций;
    • 3 дельтаплана;
    • 2 украшения на спину;
    • 5 воздушных следов;
    • 20 граффити;
    • 1300 В-баксов;
    • и это ещё не всё!',
              'ko' => '시즌4: 7월 9일 종료
  
  3,500 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 카바이드 의상
    • 배틀호크 의상
    • 50% 보너스 시즌 매치 XP
    • 10% 보너스 시즌 친구 매치 XP
    • 주간 도전 이용 권한
    • 블록버스터 도전 이용 권한
    • 카바이드 도전 이용 권한
  
  배틀패스 티어를 올려서 100개 이상의 보상을 획득해보세요(보통 75-150시간 소요). 더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 오메가 및 다른 의상 4개
    • 곡괭이 4개
    • 이모트 5개
    • 글라이더 3개
    • 등 장신구 2개
    • 스카이다이빙 트레일 5개
    • 스프레이 20개
    • 1,300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第4賽季：現在起至7月9日
  
  立即獲得這些價值3500V幣的物品。
    • 碳化合金服裝
    • 戰鷹服裝
    • 50% 額外賽季比賽經驗
    • 10%額外賽季好友比賽經驗
    • 獲得每週挑戰許可權
    • 獲得爆紅挑戰許可權
    • 獲得碳化合金挑戰許可權
  
  通過遊玩提升英雄季卡戰階，解鎖100多個獎勵(通常需要75到150個小時的遊玩時間)。希望更快嗎？你可以隨時使用V幣購買戰階！
    •歐米伽以及其他4套服裝
    •4個鋤頭
    • 5個姿勢
    • 3個滑翔傘
    • 2個背部裝飾
    • 5個滑翔軌跡
    • 20個小塗鴉
    • 1300V幣
    • 以及更多獎勵！',
              'pt-br' => 'Temporada 4: de hoje até 9 de julho
  
  Receba instantaneamente estes itens avaliados em mais de 3.500 V-Bucks.
    • Traje Carboneto
    • Traje Gavião Guerreiro
    • 50% de Bônus de EXP da Temporada em Partidas
    • 10% de Bônus de EXP da Temporada em Partidas com Amigos
    • Acesso a Desafios Semanais
    • Acesso a Desafios de Filmaço
    • Acesso a Desafios Carboneto
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 100 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
    • O Ômega e mais 4 outros trajes
    • 4 Picaretas
    • 5 Gestos
    • 3 Asas-deltas
    • 2 Acessórios para as Costas
    • 5 Rastros de Queda Livre
    • 20 Sprays
    • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 4: Now thru July 9
  
  Instantly get these items valued at over 3,500 V-Bucks.
    • Carbide Outfit
    • Battlehawk Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Access to Weekly Challenges
    • Access to Blockbuster Challenges
    • Access to Carbide Challenges
  
  Play to level up your Battle Pass, unlocking over  100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • Omega plus 4 other outfits
    • 4 Pickaxes
    • 5 Emotes
    • 3 Gliders
    • 2 Back Blings
    • 5 Skydiving Trails
    • 20 Sprays
    • 1300 V-Bucks
    • and so much more!',
              'it' => 'Stagione 4: fino al 9 luglio
  
  Ottieni subito questi oggetti dal valore di oltre 3.500 V-buck!
    • Costume Carburo
    • Costume Battlehawk
    • Bonus del 50% dei PE partite stagionali
    • Bonus del 10% dei PE partite amico
    • Accesso alle sfide settimanali
    • Accesso alle sfide spaccatutto
    • Accesso alle sfide Carburo
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando fino a 100 ricompense (necessarie tra le 75-150 ore di gioco). Vuoi tutto più in fretta? Puoi usare i V-buck per acquistare i livelli in qualsiasi momento!
    • Omega e altri 4 costumi
    • 4 picconi
    • 3 deltaplani
    • 2 Dorso decorativo
    • 5 Scie Skydive
    • 20 Spray
    • 1300 V-buck
    • ...e molto altro ancora!',
              'fr' => 'Saison 4 : jusqu\'au 9 juillet
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 3 500 V-bucks.
    • Tenue Carburo
    • Tenue Le Faucon
    • Bonus d\'EXP de saison de 50%
    • Bonus d\'EXP de saison de 10% pour des amis
    • L\'accès aux défis hebdomadaires
    • L\'accès aux défis Superproduction
    • L\'accès aux défis de Carburo
  
   Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 100 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
    • Oméga plus 4 autres tenues
    • 4 pioches
    • 5 emotes
    • 3 planeurs
    • 2 accessoires de dos
    • 5 traînées de condensation
    • 20 aérosols
    • 1300 V-bucks
    • Et plus !',
              'zh-cn' => '第4赛季：现在起至7月9日
  
  立即获得这些价值3500V币的物品。
    • 碳化合金服装
    • 战鹰服装
    • 50% 额外赛季比赛经验
    • 10%额外赛季好友比赛经验
    • 获得每周挑战权限
    • 获得爆红挑战权限
    • 获得碳化合金挑战权限
  
  通过游玩提升英雄季卡战阶，解锁100多个奖励(通常需要75到150个小时的游玩时间)。希望更快吗？你可以随时使用V币购买战阶！
    •欧米伽以及其他4套服装
    •4个锄头
    • 5个姿势
    • 3个滑翔伞
    • 2个背部装饰
    • 5个滑翔轨迹
    • 20个小涂鸦
    • 1300V币
    • 以及更多奖励！',
              'es' => 'Temporada 4: Desde ahora hasta el 9 de julio
  
  Consigue instantáneamente estos objetos valorados en más de 3500 paVos.
    • Traje de Carburo
    • Traje de halcón bélico
    • Bonificación de PE de partida de temporada del 50%.
    • Bonificación de PE de partida amistosa de temporada del 10%.
    • Acceso a los desafíos semanales.
    • Acceso a los desafíos de Taquillazo.
    • Acceso a los desafíos de Carburo.
  
  Juega para subir de nivel tu pase de batalla y desbloquea más de 100 recompensas (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
    • Omega más otros 4 trajes.
    • 4 picos.
    • 5 gestos.
    • 3 alas delta.
    • 2 accesorios mochileros.
    • 5 estelas de descenso.
    • 20 grafitis.
    • 1300 paVos
    • ¡Y mucho más!',
              'ar' => 'Season 4: Now thru July 9
  
  Instantly get these items valued at over 3,500 V-Bucks.
    • Carbide Outfit
    • Battlehawk Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Access to Weekly Challenges
    • Access to Blockbuster Challenges
    • Access to Carbide Challenges
  
  Play to level up your Battle Pass, unlocking over  100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • Omega plus 4 other outfits
    • 4 Pickaxes
    • 5 Emotes
    • 3 Gliders
    • 2 Back Blings
    • 5 Skydiving Trails
    • 20 Sprays
    • 1300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン4: 7月9日まで
  
  3,500 V-Bucks以上の価値があるアイテムをすぐに手に入れましょう
    ・カーバイドコスチューム
    ・バトルホークコスチューム
    ・シーズンマッチXPの50%ボーナス
    ・シーズンフレンドマッチXPの10%ボーナス
    ・ウィークリーチャレンジへの挑戦権
    ・ブロックバスターチャレンジへの挑戦権
    ・カーバイドチャレンジへの挑戦権
  
  プレイしてバトルパスのレベルを上げると、100個以上の報酬をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！
    ・オメガコスチュームとさらに他のコスチュームx4
    ・ツルハシx4
    ・エモートx5
    ・グライダーx3
    ・バックアクセサリーx2
    ・スカイダイビングトレイルx5
    ・スプレーx20
    ・1300 V-Bucks
    ・他にも色々！',
              'pl' => 'Sezon 4: potrwa do 9 lipca
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 3 500 V-dolców:
    • Strój: Karbid
    • Strój: Bojowy Jastrząb
    • Sezonowa premia +50% PD za grę
    • Sezonowa premia +10% PD za grę ze znajomym
    • Dostęp do wyzwań tygodnia
    • Dostęp do wyzwań Hitu Ekranu
    • Dostęp do wyzwań Karbida
  
  Graj dalej, aby awansować karnet bojowy i zdobyć łącznie ponad 100 nagród (ich zebranie normalnie zajmuje od 75 do 150 godz. gry). Chcesz się rozwijać szybciej? W każdej chwili możesz kupić poziomy za V-dolce!
    • Omega plus 4 inne stroje
    • 4 kilofy
    • 5 emotek
    • 3 lotnie
    • 2 plecaki
    • 5 smug lotni
    • 20 graffiti
    • 1300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 4: Ahora hasta el 9 de julio
  
  ¡Obtén al instante estos objetos que cuestan más de 3500 monedas V!
    • Atuendo Carburo
    • Atuendo Halcón de combate
    • 50 % de PE de bonificación para partidas de la temporada
    • 10 % de PE de bonificación para partidas con amigos en la temporada
    • Acceso a los desafíos semanales
    • Acceso a los desafíos de Taquillazo
    • Acceso a los desafíos de Carburo
  
  Juega para subir de nivel tu pase de batalla y desbloquear más de 100 recompensas (esto lleva entre 75 y 150 horas de juego). ¿Lo quieres todo más rápido? ¡Puedes utilizar monedas V para comprar niveles cuando quieras!
    • Omega más otros 4 atuendos
   • 4 picos
   • 5 gestos
    • 3 planeadores
    • 2 mochilas retro
    • 5 rastros de caída libre
    • 20 aerosoles
    • 1300 monedas V
    • ¡Y mucho más!',
              'tr' => '4. Sezon: Şu andan 9 Temmuz’a kadar
  
  3.500 V-Papel’in üzerinde değeri olan bu içerikleri hemen edin.
   • Demir Maske Kıyafeti
    • Savaş Şahini Kıyafeti
    • %50 Bonus Sezonluk Maç TP’si
    • %10 Bonus Sezonluk Arkadaşlar için Maç TP’si
    • Haftalık Görevlere Erişim
    • Gişe Rekortmeni Görevlerine Erişim
    • Demir Maske Görevlerine Erişim
  
  Battle Royale oynayarak Savaş Bileti’nin seviyesini yükselt ve 100’den fazla ödülü aç (yaklaşık 75 ila 150 saat oynama gerektirir). Hepsini daha hızlı mı almak istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!
    • Omega artı 4 kıyafet daha
    • 4 Kazma
    • 5 İfade
    • 3 Planör
    • 2 Sırt Süsü
    • 5 Hava Dalışı İzi
    • 20 Sprey
    • 1300 V-Papel
    • ve çok daha fazlası!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season4_BattlePass.DA_BR_Season4_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => 'E9527AF46F4B4A9CAE98D91F2AA53CB6',
            'devName' => 'BR.Season4.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Stufe',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 티어',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Categoria de Passe de Batalha',
              'en' => 'Battle Pass Tier',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Palier du Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Nivel del pase de batalla',
              'ar' => 'Battle Pass Tier',
              'ja' => 'バトルパスティア',
              'pl' => 'Stopień karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 얻어보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => '素晴らしい報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödüllerin sahibi ol!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      11 => 
      array (
        'name' => 'BRSeason5',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => 'FF77356F424644529049280AFC8A795E',
            'devName' => 'BR.Season5.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2B4936F24F3179416FEFD49DA5C4B64E',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Bundle battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle Pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle Pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison 5: Ab sofort bis 25. September
  
  Erhalte sofort diese Gegenstände im Wert von über 10.000 V-Bucks.
    • Jägerin (Outfit)
    • Drift (Outfit)
    • Rotstreifen (Outfit)
    • Ballonhacke (Spitzhacke)
    • Funker (Rücken-Accessoire)
    • Laternen (Flugspur)
    • 2 Hängegleiter
    • 4 Spraymotive
    • +70 % Saison-Match-EP
    • +20 % Saison-Match-EP für Freunde
    • zusätzliche Wöchentliche Herausforderungen  • fortschreitende Drift-Herausforderungen
    • und mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um über 75 Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
    • Ragnarök und 4 weitere Outfits
    • 3 Spitzhacken
    • 4 Emotes
    • 2 Hängegleiter
    • 4 Rücken-Accessoires
    • 4 Flugspuren
    • 11 Spraymotive
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Пятый сезон: до 25 сентября
  
  Сразу же получите предметы стоимостью более 10 000 В-баксов!
    • экипировка Астрид;
    • экипировка Ронина;
    • экипировка Красной Линии;
    • кирка «Шарики»;
    • украшение на спину «Рюкзак-скрутка»;
    • воздушный след «Фонарики»;
    • 2 дельтаплана;
    • 4 граффити;
    • +70% к опыту за матчи сезона;
    • +20% к опыту друзей за матчи сезона;
    • дополнительные еженедельные испытания;
    • последовательные испытания Ронина;
    • и многое другое!
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут более 75 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • экипировка Рагнарёка и ещё 4 костюма;
    • 3 кирки;
    • 4 эмоции;
    • 2 дельтаплана;
    • 4 украшения на спину;
    • 4 воздушных следа;
    • 11 граффити;
    • 1300 В-баксов;
    • и это ещё не всё!',
              'ko' => '시즌 5: 9월 25일 종료
  
  10,000 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 헌트리스 의상
    • 드리프트 의상
    • 레드라인 의상
    • 풍선 도끼 곡괭이
    • 업링크 등 장신구
    • 등불 스카이다이빙 트레일
    • 글라이더 2개
    • 스프레이 4개
    • 70% 보너스 시즌 매치 XP
    • 20% 보너스 시즌 친구 매치 XP
    • 추가 주간 도전
    • 드리프트 연속 도전
    • 그 외 혜택!
  
  배틀패스 티어를 올려서 75개 이상의 보상을 획득해보세요(보통 75-150시간 소요). 더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 라그나로크 외 의상 4개
    • 곡괭이 3개
    • 이모트 4개
    • 글라이더 2개
    • 등 장신구 4개
    • 스카이다이빙 트레일 4개
    • 스프레이 11개
    • 1,300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第5賽季：從今天起直到9月25號
  
  立即獲得以下總價值超過1萬V幣的物品。
    •“女獵手”套裝  •“天狐”套裝
    • “紅線”套裝
    • “氣球斧”鋤頭
    • “上傳” 背部裝飾
    •“燈籠” 滑翔軌跡
    • 2種滑翔傘
    • 4種噴漆圖案
    • 70% 額外賽季匹配經驗值
    • 20% 額外賽季好友匹配經驗值
    • 額外的每週挑戰
    • 天狐進度挑戰
    • 以及更多獎勵
  
  玩遊戲以提升你的英雄季卡，解鎖超過75中獎勵（一般情況下全解鎖需要75至150小時的遊玩時間）想要更快解鎖？你隨時可以用V幣購買戰階等級！
    • “諸神黃昏”外加4套其他服裝
    • 3款鋤頭
    • 4種姿勢
    • 2款滑翔傘
    • 4種背部裝飾
    • 4種滑翔軌跡
    • 11款塗鴉
    • 1300V幣
    •以及更多內容！',
              'pt-br' => 'Temporada 5: de hoje até 25 de setembro
  
  Receba instantaneamente estes itens avaliados em mais de 10.000 V-Bucks.
    • Traje Caçadora
    • Traje Atemporal
    • Traje Acelerada
    • Picareta Balãoreta
    • Acessório para as Costas Conexão
    • Rastro de Queda Livre Lanternas
    • 2 Asas-deltas
    • 4 Sprays
    • 70% de Bônus de EXP da Temporada em Partidas
    • 20% de Bônus de EXP da Temporada em Partidas com Amigos
    • Desafios Semanais Extras
    • Desafios Atemporal Progressivos
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 75 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
    • O Ragnarok e mais 4 outros trajes
    • 3 Picaretas
    • 4 Gestos
    • 2 Asas-deltas
    • 4 Acessórios para as Costas
    • 4 Rastros de Queda Livre
    • 11 Sprays
    • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 5: Now thru Sept 25
  
  Instantly get these items valued at over 10,000 V-Bucks.
    • “Huntress” Outfit
    • “Drift” Outfit
    • “Redline” Outfit
    • “Balloon Axe” Pickaxe
    • “Uplink” Back Bling
    • “Lanterns” Skydiving Trail
    • 2 Gliders
    • 4 Sprays
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Drift Progressive Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • “Ragnarok” plus 4 other outfits
    • 3 Pickaxes
    • 4 Emotes
    • 2 Gliders
    • 4 Back Blings
    • 4 Skydiving Trails
    • 11 Sprays
    • 1,300 V-Bucks
    • and so much more!',
              'it' => 'Incrementa di 5 secondi la durata dell\'effetto attivo di Allo sbaraglio.',
              'fr' => 'Saison 5 : jusqu\'au 25 septembre
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 10 000 V-bucks.
    • Tenue Chasseresse
    • Tenue Nomade
    • Tenue Ligne rouge
    • Pioche Baudruche
    • Accessoire de dos Radiotransmetteur
    • Traînée de condensation Lanternes
    • 2 planeurs
    • 4 aérosols
    • Bonus d\'EXP de saison de 70%
    • Bonus d\'EXP de saison de 20% pour des amis
    • Des défis hebdomadaires supplémentaires
    • Les défis progressifs du Nomade
    • Et plus !
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 75 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
    • Ragnarök plus 4 autres tenues
    • 3 pioches
    • 4 emotes
    • 2 planeurs
    • 4 accessoires de dos
    • 4 traînées de condensation
    • 11 aérosols
    • 1300 V-bucks
    • Et plus !',
              'zh-cn' => '第5赛季：从今天起直到9月25号
  
  立即获得以下总价值超过1万V币的物品。
    •“女猎手”套装  •“天狐”套装
    • “红线”套装
    • “气球斧”锄头
    • “上传” 背部装饰
    •“灯笼” 滑翔轨迹
    • 2种滑翔伞
    • 4种喷漆图案
    • 70% 额外赛季匹配经验值
    • 20% 额外赛季好友匹配经验值
    • 额外的每周挑战
    • 天狐进度挑战
    • 以及更多奖励
  
  玩游戏以提升你的英雄季卡，解锁超过75中奖励（一般情况下全解锁需要75至150小时的游玩时间）想要更快解锁？你随时可以用V币购买战阶等级！
    • “诸神黄昏”外加4套其他服装
    • 3款锄头
    • 4种姿势
    • 2款滑翔伞
    • 4种背部装饰
    • 4种滑翔轨迹
    • 11款涂鸦
    • 1300V币
    •以及更多内容！',
              'es' => 'Temporada 5: Desde ahora hasta el 25 de septiembre
  
  Consigue instantáneamente estos objetos valorados en más de 10 000 paVos.
    • Traje de Cazadora.
    • Traje de Deriva.
    • Traje de Revolucionada.
    • Pico Hacha globo.
    • Accesorio mochilero Enlace ascendente.
    • Estela de descenso Farolillos.
    • 2 alas delta.
    • 4 grafitis.
    • Bonificación de PE de partida de temporada del 70 %.
    • Bonificación de PE de partida amistosa de temporada del 20 %.
    • Desafíos semanales adicionales.
    • Desafíos progresivos de Deriva.
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquea más de 75 recompensas adicionales (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
    •  Ragnarok más otros 4 trajes.
    • 3 picos.
    • 4 gestos.
    • 2 alas delta.
    • 4 accesorios mochileros.
    • 4 estelas de descenso.
    • 11 grafitis.
    • 1300 paVos
    • ¡Y mucho más!',
              'ar' => 'Season 5: Now thru Sept 25
  
  Instantly get these items valued at over 10,000 V-Bucks.
    • “Huntress” Outfit
    • “Drift” Outfit
    • “Redline” Outfit
    • “Balloon Axe” Pickaxe
    • “Uplink” Back Bling
    • “Lanterns” Skydiving Trail
    • 2 Gliders
    • 4 Sprays
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Drift Progressive Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • “Ragnarok” plus 4 other outfits
    • 3 Pickaxes
    • 4 Emotes
    • 2 Gliders
    • 4 Back Blings
    • 4 Skydiving Trails
    • 11 Sprays
    • 1,300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン5: 9月25日まで
  
  10,000 V-Bucks以上の価値があるアイテムをすぐに手に入れましょう
    ・「ハントレス」コスチューム
    ・「ドリフト」コスチューム
    ・「レッドライン」コスチューム
    ・「バルーンアックス」ツルハシ
    ・「アップリンク」バックアクセサリー
    ・「ランタン」スカイダイビングトレイル
    ・グライダー2個
    ・スプレー4個
    ・シーズンマッチXPの70%ボーナス
    ・シーズンフレンドマッチXPの20%ボーナス
    ・追加のウィークリーチャレンジ
    ・ドリフトプログレッシブチャレンジ
    ・他にも色々！
  
  プレイしてバトルパスのレベルを上げると、75以上の報酬をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！
    ・「ラグナロク」とさらに他のコスチュームx4
    ・ツルハシx3
    ・エモートx4
    ・グライダーx2
    バックアクセサリーx4
    スカイダイビングトレイルx4
    ・スプレーx11
    ・1,300 V-Bucks
    他にも色々！',
              'pl' => 'Sezon 5: potrwa do 25 września
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 10 000 V-dolców:
    • Strój: Łowczyni
    • Strój: Drift
    • Strój: Prędkość Graniczna
    • Kilof: Balon
    • Plecak: Łącznik
    • Smuga: Latarnie
    • 2 lotnie
    • 4 graffiti
    • Sezonowa premia +70% PD za grę
    • Sezonowa premia +20% PD za grę ze znajomym
    • Dostęp do dodatkowych wyzwań tygodniowych
    • Dostęp do progresywnych wyzwań Drifta
    • I jeszcze więcej!
  
  Graj, aby awansować karnet bojowy i odkryć do 75 nagród (ich zdobycie zajmuje zwykle od 75 do 150 godz. gry). Chcesz rozwijać się szybciej? W każdej chwili możesz kupić poziomy za V-dolce!
    • Zmierzch Bogów plus 4 inne stroje
    • 3 kilofy
    • 4 emotki
    • 2 lotnie
    • 4 plecaki
    • 4 smugi
    • 11 graffiti
    • 1300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 5: Ahora hasta el 25 de septiembre
  
  Obtén al instante estos objetos que cuestan más de 10 000 monedas V.
    • Atuendo "Cazadora"
    • Atuendo "Deriva"
    • Atuendo "Línea roja"
    • Pico "Globo"
    • Mochila retro "Enlace ascendente"
    • Rastro de caída libre "Faroles"
    • 2 planeadores
    • 4 aerosoles
    • 70 % de bonificación de PE para partidas de la temporada
    • 20% de PE de bonificación para partidas con amigos en la temporada
    • Desafíos semanales adicionales
    • Desafíos progresivos de Deriva
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquear más de 75 recompensas adicionales (normalmente toma de 75 a 150 horas de juego). ¿Lo quieres todo más rápido? ¡Puedes utilizar monedas V para comprar niveles cuando quieras!
    • "Ragnarok" más otros 4 atuendos
    • 3 picos
    • 4 gestos
    • 2 planeadores
    • 4 mochilas retro
    • 4 rastros de caída libre
    • 11 aerosoles
    • 1300 monedas V
    • ¡Y mucho más!',
              'tr' => '5. Sezon: Şu andan 25 Eylül’e kadar
  
  10.000 V-Papel’in üzerinde değeri olan bu içerikleri hemen edin.
    • “Avcı Viking” Kıyafeti
    • “Drift” Kıyafeti
    • “Gözüpek Yarışçı” Kıyafeti
    • “Balon Kazma”
    • “Telsizli Çanta” Sırt Süsü
    • “Fenerler” Hava Dalışı İzi
    • 2 Planör
    • 4 Sprey
    • %70 Bonus Sezonluk Maç TP’si
    • %20 Bonus Sezonluk Arkadaşlar için Maç TP’si
    • İlave Haftalık Görevlere Erişim
    • İlerlemeli Drift Görevleri
    • ve çok daha fazlası!
  
  Battle Royale oynayarak Savaş Bileti’nin seviyesini yükselt ve 75’ten fazla ödülü aç (genelde 75 ila 150 saat oynama gerektirir). Hepsini daha hızlı almak mı istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!
    • “Ragnarok” artı 4 kıyafet daha
    • 3 Kazma
    • 4 İfade
    • 2 Planör
    • 4 Sırt Süsü
    • 4 Hava Dalışı İzi
    • 11 Sprey
    • 1.300 V-Papel
    • ve çok daha fazlası!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season5_BattlePassWithLevels.DA_BR_Season5_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => 'D51A2F28AAF843C0B208F14197FBFE91',
            'devName' => 'BR.Season5.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2B4936F24F3179416FEFD49DA5C4B64E',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison 5',
              'ru' => 'Сезон 5',
              'ko' => '시즌 5',
              'zh-hant' => '第5賽季',
              'pt-br' => 'Temporada 5',
              'en' => 'Season 5',
              'it' => 'Stagione 5',
              'fr' => 'Saison 5',
              'zh-cn' => '第5赛季',
              'es' => 'Temporada 5',
              'ar' => 'Season 5',
              'ja' => 'シーズン5',
              'pl' => 'Sezon 5',
              'es-419' => 'Temporada 5',
              'tr' => '5. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison 5: Ab sofort bis 25. September
  
  Erhalte sofort diese Gegenstände im Wert von über 3.500 V-Bucks.
    • Jägerin (Outfit)
    • Drift (Outfit)
    • +50 % Saison-Match-EP
    • +10 % Saison-Match-EP für Freunde
    • zusätzliche Wöchentliche Herausforderungen
    • fortschreitende Drift-Herausforderungen
  
  Spiele weiter und stufe deinen Battle Pass auf, um über 100 Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
    • Ragnarök und 5 weitere Outfits
    • 4 Spitzhacken
    • 5 Emotes
    • 4 Hängegleiter
    • 5 Rücken-Accessoires
    • 5 Flugspuren
    • 15 Spraymotive
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Пятый сезон: до 25 сентября
  
  Сразу же получите предметы стоимостью более 3500 В-баксов!
    • экипировка Астрид;
    • экипировка Ронина;
    • +50% к опыту за матчи сезона;
    • +10% к опыту друзей за матчи сезона;
    • дополнительные еженедельные испытания;
    • последовательные испытания Ронина.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут более 100 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • экипировка Рагнарёка и ещё 5 костюмов;
    • 4 кирки;
    • 5 эмоций;
    • 4 дельтаплана;
    • 5 украшений на спину;
    • 5 воздушных следов;
    • 15 граффити;
    • 1300 В-баксов;
    • и это ещё не всё!',
              'ko' => '시즌 5: 9월 25일 종료
  
  3,500 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 헌트리스 의상
    • 드리프트 의상
    • 50% 보너스 시즌 매치 XP
    • 10% 보너스 시즌 친구 매치 XP
    • 추가 주간 도전
    • 드리프트 연속 도전
  
  배틀패스 티어를 올려서 100개 이상의 보상을 획득해보세요(보통 75-150시간 소요). 더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 라그나로크 외 의상 5개
    • 곡괭이 4개
    • 이모트 5개
    • 글라이더 4개
    • 등 장신구 5개
    • 스카이다이빙 트레일 5개
    • 스프레이 15개
    • 1,300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第5賽季：從現在起到9月25日
  
  立即獲得這些價值超過3500V幣的物品。
    • 女獵手服裝
    • 天狐服裝
    • 50%額外賽季比賽經驗
    • 10%額外賽季好友比賽經驗
    • 額外的每週挑戰
    • 天狐漸進挑戰
  
  通過遊玩升級你的英雄季卡，解鎖超過100項獎勵（通常需要75到150個小時的遊玩時間）。希望更快嗎？你可以隨時使用V幣購買戰階！
    • “諸神黃昏”外加5套其他服裝
    • 4個鋤頭
    • 5個姿勢
    • 4個滑翔傘
    • 5個背部裝飾
    • 5個滑翔軌跡
    • 15個塗鴉
    • 1300V幣
    •以及更多！',
              'pt-br' => 'Temporada 5: de hoje até 25 de julho
  
  Receba instantaneamente estes itens avaliados em mais de 3.500 V-Bucks.
    • Traje Caçadora
    • Traje Atemporal
    • 50% de Bônus de EXP da Temporada em Partidas
    • 10% de Bônus de EXP da Temporada em Partidas com Amigos
    • Desafios Semanais Extras
    • Desafios Atemporal Progressivos
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 100 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
    • O Ragnarok e mais 5 outros trajes
    • 4 Picaretas
    • 5 Gestos
    • 4 Asas-deltas
    • 5 Acessórios para as Costas
    • 5 Rastros de Queda Livre
    • 15 Sprays
    • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 5: Now thru Sept 25
  
  Instantly get these items valued at over 3,500 V-Bucks.
    • Huntress Outfit
    • Drift Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Drift Progressive Challenges
  
  Play to level up your Battle Pass, unlocking over 100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • “Ragnarok” plus 5 other outfits
    • 4 Pickaxes
    • 5 Emotes
    • 4 Gliders
    • 5 Back Blings
    • 5 Skydiving Trails
    • 15 Sprays
    • 1,300 V-Bucks
    • and so much more!',
              'it' => 'Stagione 5: fino al 25 settembre
  
  Ottieni subito questi oggetti dal valore di oltre 3.500 V-buck!
    • Costume Cacciatrice
    • Costume Alla deriva
    • Bonus del 50% dei PE partite stagionali
    • Bonus del 10% dei PE partite amico
    • Sfide settimanali extra
    • Sfide progressive Alla deriva
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando fino a 100 ricompense (necessarie tra le 75-150 ore di gioco). Vuoi tutto più in fretta? Puoi usare i V-buck per acquistare i livelli in qualsiasi momento!
    • "Ragnarok" e altri 5 costumi
    • 4 picconi
    • 5 emote
    • 4 deltaplani
    • 5 dorsi decorativi
    • 5 scie Skydive
    • 15 spray
    • 1300 V-buck
    • ...e molto altro ancora!',
              'fr' => 'Saison 5 : jusqu\'au 25 septembre
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 3500 V-bucks.
    • Tenue Chasseresse
    • Tenue Nomade
    • Bonus d\'EXP de saison de 50%
    • Bonus d\'EXP de saison de 10% pour des amis
    • Des défis hebdomadaires supplémentaires
    • Les défis progressifs du Nomade
  
   Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 100 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
    • Ragnarök plus 5 autres tenues
    • 4 pioches
    • 5 emotes
    • 4 planeurs
    • 5 accessoires de dos
    • 5 traînées de condensation
    • 15 aérosols
    • 1300 V-bucks
    • Et plus !',
              'zh-cn' => '第5赛季：从现在起到9月25日
  
  立即获得这些价值超过3500V币的物品。
    • 女猎手服装
    • 天狐服装
    • 50%额外赛季比赛经验
    • 10%额外赛季好友比赛经验
    • 额外的每周挑战
    • 天狐渐进挑战
  
  通过游玩升级你的英雄季卡，解锁超过100项奖励（通常需要75到150个小时的游玩时间）。希望更快吗？你可以随时使用V币购买战阶！
    • “诸神黄昏”外加5套其他服装
    • 4个锄头
    • 5个姿势
    • 4个滑翔伞
    • 5个背部装饰
    • 5个滑翔轨迹
    • 15个涂鸦
    • 1300V币
    •以及更多！',
              'es' => 'Temporada 5: Desde ahora hasta el 25 de septiembre
  
  Consigue instantáneamente estos objetos valorados en más de 3500 paVos.
    • Traje de Cazadora.
    • Traje de Deriva.
    • Bonificación de PE de partida de temporada del 50 %.
    • Bonificación de PE de partida amistosa de temporada del 10 %.
    • Desafíos semanales adicionales.
    •  Desafíos progresivos de Deriva.
  
  Juega para subir de nivel tu pase de batalla y desbloquea más de 100 recompensas (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
    • Ragnarok más otros 5 trajes.
    • 4 picos.
    • 5 gestos.
    • 4 alas delta.
    • 5 accesorios mochileros.
    • 5 estelas de descenso.
    • 15 grafitis.
    • 1300 paVos
   • ¡Y mucho más!',
              'ar' => 'Season 5: Now thru Sept 25
  
  Instantly get these items valued at over 3,500 V-Bucks.
    • Huntress Outfit
    • Drift Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Drift Progressive Challenges
  
  Play to level up your Battle Pass, unlocking over 100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • “Ragnarok” plus 5 other outfits
    • 4 Pickaxes
    • 5 Emotes
    • 4 Gliders
    • 5 Back Blings
    • 5 Skydiving Trails
    • 15 Sprays
    • 1,300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン5: 9月25日まで
  
  3,500 V-Bucks以上の価値があるアイテムをすぐに手に入れましょう
    ・ハントレスコスチューム
    ・ドリフトコスチューム
    ・シーズンマッチXPの50%ボーナス
    ・シーズンフレンドマッチXPの10%ボーナス
    ・追加のウィークリーチャレンジ
    ・ドリフトプログレッシブチャレンジ
  
  プレイしてバトルパスのレベルを上げると、100個以上の報酬をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！
    ・「ラグナロク」とさらに他のコスチュームx5
    ・ツルハシx4
    ・エモートx5
    ・グライダーx4
    ・バックアクセサリーx5
    ・スカイダイビングトレイルx5
    ・スプレーx15
    ・1,300 V-Bucks
    ・他にも色々！',
              'pl' => 'Sezon 5: potrwa do 25 września
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 3 500 V-dolców:
    • Strój: Łowczyni
    • Strój: Drift
    • Sezonowa premia +50% PD za grę
    • Sezonowa premia +10% PD za grę ze znajomym
    • Dostęp do dodatkowych wyzwań tygodniowych
    • Dostęp do progresywnych wyzwań Drifta
  
  Graj, aby awansować karnet bojowy i zdobyć łącznie ponad 100 nagród (ich zebranie zajmuje zwykle od 75 do 150 godz. gry). Chcesz się rozwijać szybciej? W każdej chwili możesz kupić poziomy za V-dolce!
    • Zmierzch Bogów plus 5 innych strojów
    • 4 kilofy
    • 5 emotek
    • 3 lotnie
    • 5 plecaków
    • 5 smug lotni
    • 15 graffiti
    • 1 300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 5: Ahora hasta el 25 de septiembre
  
  Obtén estos objetos instantáneamente valuados en más de 3500 monedas V.
    • Atuendo de Cazadora
    • Atuendo de Deriva
    • 50 % de bonificación de PE para partidas de la temporada
    • 10% de PE de bonificación para partidas con amigos en la temporada
    • Desafíos semanales adicionales
    • Desafíos progresivos de Deriva
  
  Juega para subir de nivel tu pase de batalla, desbloqueando más de 100 recompensas (normalmente toma de 75 a 150 horas de juego). ¿Lo quieres todo más rápido? ¡Puedes utilizar monedas V para comprar niveles cuando quieras!
    • “Ragnarok” más otros 5 atuendos
    • 4 picos
    • 5 gestos
    • 4 planeadores
    • 5 mochilas retro
    • 5 rastros de caída libre
    • 15 aerosoles
    • 1300 monedas V
    • ¡Y mucho más!',
              'tr' => '5. Sezon: 25 Eylül’e kadar sürecek
  
  3.500 V-Papel’in üzerinde değeri olan bu içerikleri hemen edin.
    • Avcı Viking Kıyafeti
    • Drift Kıyafeti
    • %50 Bonus Sezonluk Maç TP’si
    • %10 Bonus Arkadaşlar için Sezonluk Maç TP’si
    • Fazladan Haftalık Görevler
    • İlerlemeli Drift Görevleri
  
  Battle Royale oynayarak Savaş Bileti’nin seviyesini yükselt, 100’den fazla ödülü aç (genelde 75 ila 150 saat oynama gerektirir). Hepsine hemen sahip olmak mı istiyorsun? V-Papel kullanarak aşamaları istediğin zaman açabilirsin!
    • “Ragnarok” artı 5 kıyafet daha
    • 4 Kazma
    • 5 İfade
    • 4 Planör
    • 5 Sırt Süsü
    • 5 Hava Dalışı İzi
    • 15 Sprey
    • 1.300 V-Papel
    • ve daha pek çok şey!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season5_BattlePass.DA_BR_Season5_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => '4B2E310BC1AE40B292A16D5AAD747E0A',
            'devName' => 'BR.Season5.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Stufe',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 티어',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Categoria de Passe de Batalha',
              'en' => 'Battle Pass Tier',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Palier du Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Nivel del pase de batalla',
              'ar' => 'Battle Pass Tier',
              'ja' => 'バトルパスティア',
              'pl' => 'Stopień karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 얻어보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => 'ステキな報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödüllerin sahibi ol!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      12 => 
      array (
        'name' => 'BRSeason6',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => '19D4A5ACC90B4CDF88766A0C8A6D13FB',
            'devName' => 'BR.Season6.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '854FAED044783BF137181887C325FFD2',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Bundle battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle Pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle Pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison 6: Ab sofort bis 6. Dezember
  
  Erhalte sofort diese Gegenstände im Wert von über 10.000 V-Bucks.
    • Calamity (Outfit)
    • DJ Yonder (Outfit)
    • Aufgesattelt (Outfit)
    • Krachender Mix (Spitzhacke)
    • Picknick (Hängegleiter)
    • Märchenumhang (Rücken-Accessoire)
    • 3 Spraymotive
    • Wuffel (Gefährte)
    • Düsen (Flugspur)
    • +70 % Saison-Match-EP
    • +20 % Saison-Match-EP für Freunde
    • zusätzliche Wöchentliche Herausforderungen
    • Calamity-Herausforderungen  • und mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um über 75 weitere Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
    • Wolf und 3 weitere Outfits
    • 2 Gefährten
    • 2 Spitzhacken
    • 4 Emotes
    • 2 Hängegleiter
    • 4 Rücken-Accessoires
    • 4 Flugspuren
    • 11 Spraymotive
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Шестой сезон: до 6 декабря
  
  Сразу же получите предметы стоимостью более 10 000 В-баксов!
    • экипировка Тёмного рейнджера;
    • экипировка Эм Си Ламы;
    • экипировка Наездника;
    • кирка «Эквалайзер»;
    • дельтаплан «Гостинец»;
    • украшение на спину «Красный плащ»;
    • 3 граффити;
    • питомец Дружок;
    • воздушный след «Выхлоп»;
    • +70% к опыту за матчи сезона;
    • +20% к опыту друзей за матчи сезона;
    • дополнительные еженедельные испытания;
    • испытания Тёмного рейнджера;
    • и это ещё не всё!
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут более 75 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • экипировка Оборотня и ещё 3 костюма;
    • 2 питомца;
    • 2 кирки;
    • 4 эмоции;
    • 2 дельтаплана;
    • 4 украшения на спину;
    • 4 воздушных следов;
    • 11 граффити;
    • 1 300 В-баксов;
    • и это ещё не всё!',
              'ko' => '시즌 6: 12월 6일 종료
  
  10,000 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 캘러미티 의상
    • DJ 욘더 의상
    • 라마 라이더 의상
    • 스매시 업 곡괭이
    • 피크닉 글라이더
    • 빨간 망토 등 장신구
    • 스프레이 3개
    • 보니 애완동물
    • 엔진 불꽃 스카이다이빙 트레일
    • 70% 보너스 시즌 매치 XP
    • 20% 보너스 시즌 친구 매치 XP
    • 추가 주간 도전
    • 캘러미티 연속 도전
    • 그 외 혜택!
  
  배틀패스 티어를 올려서 75개 이상의 보상을 획득해보세요(보통 75-150시간 소요). 더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 다이어 외 의상 3개
    • 애완동물 2개
    • 곡괭이 2개
    • 이모트 4개
    • 글라이더 2개
    • 등 장신구 4개
    • 스카이다이빙 트레일 4개
    • 스프레이 11개
    • 1,300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第六賽季：現在起至12月6日
  
  立即獲得以下總價值逾10000V幣的物品。
    • 災厄俠客服裝
    • 金碟鐵馬服裝
    • 策馬奔騰服裝
    • 粉碎鎬
    • 野餐滑翔傘
    • 寓言斗篷背部裝飾
    • 3個塗鴉
    • 犬崽寵物
    • 助力推進滑翔軌跡
    • 70%額外賽季匹配經驗
    • 20%額外賽季好友匹配經驗
    • 額外每週挑戰
    • 災厄俠客挑戰
    • 及其他獎勵！
  
  通過遊玩提升英雄勳章戰階，解鎖百餘獎勵（通常需要75到150個小時的遊玩時間）。希望更快嗎？你可以隨時使用V幣購買戰階！
    • 驚懼狼人與其他三種服裝
    • 2只寵物
    • 2個鎬
    • 4個姿勢
    • 2個滑翔傘
    • 4個背部裝飾
    • 4個滑翔軌跡
    • 11個塗鴉
    • 1300V幣
    • 及其他獎勵！',
              'pt-br' => 'Temporada 6: de hoje até 6 de dezembro
  
  Ganhe instantaneamente esses itens avaliados em mais de 10.000 V-Bucks.
    • Traje Calamidade
    • Traje DJ Além
    • Traje Lhaminha
    • Picareta Quebra Tudo
    • Asa-delta Piquenique
    • Acessório para as Costas Capa Fabulosa
    • 3 Sprays
    • Mascote Ossíneo
    • Rastro de Queda Livre Exaustor
    • 70% de Bônus de EXP da Temporada em Partidas
    • 20% de Bônus de EXP da Temporada em Partidas com Amigos
    • Desafios Semanais Extras
    • Desafios Calamidade
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 75 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
    • Lupino e mais 3 outros trajes
    • 2 Mascotes
    • 2 Picaretas
    • 4 Gestos
    • 2 Asas-deltas
    • 4 Acessórios para as Costas
    • 4 Rastros de Queda Livre
    • 11 Sprays
    • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 6: Now thru Dec 6
  
  Instantly get these items valued at over 10,000 V-Bucks.
    • Calamity Outfit
    • DJ Yonder Outfit
    • Giddy-up Outfit
    • Smash-Up Pickaxe
    • Picnic Glider
    • Fabled Cape Back Bling
    • 3 Sprays
    • Bonesy Pet
    • Exhaust Skydiving Trail
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Calamity Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • Dire plus 3 other outfits
    • 2 Pets
    • 2 Pickaxes
    • 4 Emotes
    • 2 Gliders
    • 4 Back Blings
    • 4 Skydiving Trails
    • 11 Sprays
    • 1,300 V-Bucks
    • and so much more!',
              'it' => 'Stagione 6: da ora al 6 dicembre
  
  Ottieni subito questi oggetti, per un valore di oltre 10.000 V-buck.
    • Costume Calamity
    • Costume DJ Yonder
    • Costume Giddy-up
    • Piccone Smash-Up
    • Deltaplano Picnic
    • Dorso decorativo Fabled Cape
    • 3 spray
    • Piccolo amico Bonesy
    • Scia skydive Exhaust
    • 70% di bonus ai PE partita stagione
    • 20% di bonus ai PE partita amichevole stagione
    • Sfide settimanali extra
    • Sfide Calamity
    • E altro ancora!
  
  Gioca per far salire di livello il tuo Pass battaglia e sblocca fino a 75+ altre ricompense (tipicamente occorrono da 75 a 150 ore di gioco). Vuoi tutto più in fretta? Puoi usare i V-buck per comprare livelli in qualsiasi momento!
    • Manny più 3 altri costumi
    • 2 Piccoli amici
    • 2 picconi
    • 4 emote
    • 2 deltaplani
    • 4 dorsi decorativi
    • 4 scie skydive
    • 11 spray
    • 1300 V-buck
    • E molto altro ancora!',
              'fr' => 'Saison 6 : jusqu\'au 6 décembre
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 10 000 V-bucks.
    • Tenue Calamité
    • Tenue DJ Lama
    • Tenue Fier destrier
    • Pioche Contrôleur DJ
    • Planeur Pique-nique
    • Accessoire de dos Cape rouge
    • 3 aérosols
    • Le compagnon Ticaillou
    • Traînée de condensation Gaz d\'échappement
    • Bonus d\'EXP de saison de 70%
    • Bonus d\'EXP de saison de 20% pour des amis
    • Des défis hebdomadaires supplémentaires
    • Les défis progressifs de Calamité
    • Et plus !
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 75 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
    • Lycan plus 3 autres tenues
    • 2 compagnons
    • 2 pioches
    • 4 emotes
    • 2 planeurs
    • 4 accessoires de dos
    • 4 traînées de condensation
    • 11 aérosols
    • 1 300 V-bucks
    • Et plus !',
              'zh-cn' => '第六赛季：现在起至12月6日
  
  立即获得以下总价值逾10000V币的物品。
    • 灾厄侠客服装
    • 金碟铁马服装
    • 策马奔腾服装
    • 粉碎镐
    • 野餐滑翔伞
    • 寓言斗篷背部装饰
    • 3个涂鸦
    • 犬崽宠物
    • 助力推进滑翔轨迹
    • 70%额外赛季匹配经验
    • 20%额外赛季好友匹配经验
    • 额外每周挑战
    • 灾厄侠客挑战
    • 及其他奖励！
  
  通过游玩提升英雄勋章战阶，解锁百余奖励（通常需要75到150个小时的游玩时间）。希望更快吗？你可以随时使用V币购买战阶！
    • 惊惧狼人与其他三种服装
    • 2只宠物
    • 2个镐
    • 4个姿势
    • 2个滑翔伞
    • 4个背部装饰
    • 4个滑翔轨迹
    • 11个涂鸦
    • 1300V币
    • 及其他奖励！',
              'es' => 'Temporada 6: Desde ahora hasta el 6 de diciembre.
  
  Consigue instantáneamente estos objetos valorados en más de 10 000 paVos.
    • Traje de Calamidad.
    • Traje de Llama DJ.
    • Traje de Galopante.
    • Pico Pico de mezclas.
    • Ala delta Picnic.
    • Accesorio mochilero Capa de Fábula.
    • 3 grafitis.
    • Mascota Huesete.
    • Estela de descenso Tubo de escape.
    • Bonificación de PE de partida de temporada del 70 %.
    • Bonificación de PE de partida amistosa de temporada del 20 %.
    • Desafíos semanales adicionales.
    • Desafíos de Calamidad.
    • ¡Y mucho más!
  
  Juega para subir de nivel el pase de batalla y desbloquea más de 75 recompensas adicionales (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
    •  Lobuno más otros 3 trajes.
    • 2 mascotas.
    • 2 picos.
    • 4 gestos.
    • 2 alas delta.
    • 4 accesorios mochileros.
    • 4 estelas de descenso.
    • 11 grafitis.
    • 1300 paVos.
    • ¡Y mucho más!',
              'ar' => 'Season 6: Now thru Dec 6
  
  Instantly get these items valued at over 10,000 V-Bucks.
    • Calamity Outfit
    • DJ Yonder Outfit
    • Giddy-up Outfit
    • Smash-Up Pickaxe
    • Picnic Glider
    • Fabled Cape Back Bling
    • 3 Sprays
    • Bonesy Pet
    • Exhaust Skydiving Trail
    • 70% Bonus Season Match XP
    • 20% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Calamity Challenges
    • and more!
  
  Play to level up your Battle Pass, unlocking up to 75+ more rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • Dire plus 3 other outfits
    • 2 Pets
    • 2 Pickaxes
    • 4 Emotes
    • 2 Gliders
    • 4 Back Blings
    • 4 Skydiving Trails
    • 11 Sprays
    • 1,300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン6: 12月6日まで
  
  10,000 V-Bucks以上の価値があるアイテムを今すぐ手に入れましょう。
    • 「カラミティ」コスチューム
    • 「DJ ヨンダー」コスチューム
    • 「ギディーアップ」コスチューム
    • 「スマッシュアップ」ツルハシ
    • 「ピクニック」グライダー
    • 「寓話のケープ」バックアクセサリー
    • スプレーx3
    • 「ボーンジー」ペット
    • 「エグゾースト」スカイダイビングトレイル
    • シーズンマッチXPの70%ボーナス
    • シーズンフレンドマッチXPの20%ボーナス
    • 追加のウィークリーチャレンジ
    • カラミティチャレンジ
    • 他にも色々！
  
  プレイしてバトルパスのレベルを上げると、75個以上の報酬をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！
    • ダイアとその他コスチュームx3
    • ペットx2
    • ツルハシx2
    • エモートx4
    • グライダーx2
    • バックアクセサリーx4
    • スカイダイビングトレイルx4
    • スプレーx11
    • 1,300 V-Bucks
    • 他にも色々！',
              'pl' => 'Sezon 6: od teraz do 6 grudnia
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 10 000 V-dolców:
    • Strój: Kowbojka
    • Strój: DJ Jak-mu-tam
    • Strój: Jazda
    • Kilof: Ostry Rytm
   • Lotnia: Piknik
   • Plecak: Bajkowy Kapturek
    • 3 graffiti
    • Pupil: Kostek
    • Smuga: Spaliny
    • Sezonowa premia +70% PD za grę
    • Sezonowa premia +20% PD za grę ze znajomymi
    • Dostęp do dodatkowych wyzwań tygodnia
    • Dostęp do wyzwań Kowbojki
    • I nie tylko!
  
  Graj, aby awansować karnet bojowy i zdobyć do 75 nagród (ich zebranie zajmuje zwykle od 75 do 150 godz. gry). Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!
    • Straszliwiec plus 3 inne stroje
    • 2 pupile
    • 2 kilofy
    • 4 emotki
    • 2 lotnie
    • 4 plecaki
    • 4 smugi
    • 11 graffiti
    • 1300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 6: Ahora hasta el 6 de diciembre
  
  Obtén al instante estos objetos que cuestan más de 10 000 monedas V.
    • Atuendo Calamidad
    • Atuendo DJ Llama
    • Atuendo Arre llama
    • Pico Mezclador
    • Planeador Pícnic
    • Mochila retro Capa de Fábula
    • 3 Aerosoles
    • Mascota Huesitos
    • Rastro de caída libre Escape
    • 70% de bonificación de PE para partidas de la temporada
    • 20% de PE de bonificación para partidas con amigos en la temporada
    • Desafíos semanales adicionales
    • Desafíos de Calamidad
    • ¡y mucho más!
  
  Juega para subir de nivel el pase de batalla y desbloquear más de 75 recompensas (esto lleva entre 75 y 150 horas de juego). ¿Lo quieres todo más rápido? ¡Usa monedas V para comprar niveles en cualquier momento!
    • Amenaza inminente más otros 3 atuendos
    • 2 mascotas
    • 2 picos
    • 4 gestos
    • 2 planeadores
    • 4 mochilas retro
    • 4 rastros de caída libre
    • 11 aerosoles
    • 1300 monedas V
    • ¡y mucho más!',
              'tr' => '6. Sezon: Şu andan 6 Aralık’a kadar
  
  10.000 V-Papel’in üzerinde değeri olan bu içerikleri hemen edin.
    • Belalı Kovboy Kıyafeti
    • DJ Lama Kıyafeti
    • Dıgıdık Kıyafeti
    • Miks Kazması
    • Piknik Sepeti Planörü
    • Masal Pelerini Sırt Süsü
    • 3 Sprey
    • Sadık Dost Şanslı
    • İniş Motoru Hava Dalışı İzi
    • %70 Bonus Sezonluk Maç TP’si
    • %20 Bonus Sezonluk Arkadaşlar için Maç TP’si
    • İlave Haftalık Görevlere Erişim
    • Belalı Kovboy Görevleri
    • ve çok daha fazlası!
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve 75’ten fazla ödülü aç (genelde 75 ila 150 saat oynama gerektirir). Hepsini daha hızlı almak mı istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!
    • Kurtadam artı 3 kıyafet daha
    • 2 Sadık Dost
    • 2 Kazma
    • 4 İfade
    • 2 Planör
    • 4 Sırt Süsü
    • 4 Hava Dalışı İzi
    • 11 Sprey
    • 1.300 V-Papel
    • ve çok daha fazlası!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season6_BattlePassWithLevels.DA_BR_Season6_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => 'A6FE59C497B844068E1B5D84396F19BA',
            'devName' => 'BR.Season6.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Stufe',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 티어',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Categoria de Passe de Batalha',
              'en' => 'Battle Pass Tier',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Palier du Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Nivel del pase de batalla',
              'ar' => 'Battle Pass Tier',
              'ja' => 'バトルパスティア',
              'pl' => 'Stopień karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 얻어보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => '素晴らしい報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödüllerin sahibi ol!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => '9C8D0323775A4F59A1D4283E3FDB356C',
            'devName' => 'BR.Season6.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '854FAED044783BF137181887C325FFD2',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison 6',
              'ru' => 'Сезон 6',
              'ko' => '시즌 6',
              'zh-hant' => '第6賽季',
              'pt-br' => 'Temporada 6',
              'en' => 'Season 6',
              'it' => 'Stagione 6',
              'fr' => 'Saison 6',
              'zh-cn' => '第6赛季',
              'es' => 'Temporada 6',
              'ar' => 'Season 6',
              'ja' => 'シーズン6',
              'pl' => 'Sezon 6',
              'es-419' => 'Temporada 6',
              'tr' => '6. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison 6: Ab sofort bis 6. Dezember
  
  Erhalte sofort diese Gegenstände im Wert von über 3.500 V-Bucks.
    • Calamity (Outfit)
    • DJ Yonder (Outfit)
    • +50 % Saison-Match-EP
    • +10 % Saison-Match-EP für Freunde
    • zusätzliche wöchentliche Herausforderungen
    • fortschreitende Calamity-Herausforderungen
  
  Spiele weiter und stufe deinen Battle Pass auf, um über 100 Belohnungen freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt). Das dauert dir zu lange? Mit V-Bucks kannst du jederzeit Stufen kaufen!
    • Wolf und 4 weitere Outfits
    • 3 Gefährten
    • 3 Spitzhacken
    • 5 Emotes
    • 4 Hängegleiter
    • 4 Rücken-Accessoires
    • 5 Flugspuren
    • 14 Spraymotive
    • 2 Spielsachen
    • 3 Songs
    • 1.300 V-Bucks
    • und noch eine ganze Menge mehr!',
              'ru' => 'Шестой сезон: до 6 декабря
  
  Сразу же получите предметы стоимостью более 3500 В-баксов!
    • экипировка Тёмного рейнджера;
    • экипировка Эм Си Ламы;
    • +50% к опыту за матчи сезона;
    • +10% к опыту друзей за матчи сезона;
    • дополнительные еженедельные испытания;
    • последовательные испытания Тёмного рейнджера.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут более 100 наград. Обычно, чтобы открыть все награды, требуется 75–150 часов игры; но если вы не хотите ждать, этот процесс можно ускорить за В-баксы.
    • экипировка Оборотня и ещё 4 костюма;
    • 3 питомца;
    • 3 кирки;
    • 5 эмоций;
    • 4 дельтаплана;
    • 4 украшения на спину;
    • 5 воздушных следов;
    • 14 граффити;
    • 2 игрушки;
    • 3 музыкальных композиции;
    • 1300 В-баксов;
    • и многое другое!',
              'ko' => '시즌 6: 12월 6일 종료
  
  3,500 V-Bucks 이상의 가치가 있는 여러 아이템을 즉시 받아가세요.
    • 캘러미티 의상
    • DJ 욘더 의상
    • 50% 보너스 시즌 매치 XP
    • 10% 보너스 시즌 친구 매치 XP
    • 추가 주간 도전
    • 캘러미티 연속 도전
  
  게임을 플레이하고 배틀패스 티어를 올려서 100개 이상의 보상을 획득해보세요(보통 75-150시간 소요). 더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!
    • 다이어 외 의상 4개
    • 애완동물 3개
    • 곡괭이 3개
    • 이모트 5개
    • 글라이더 4개
    • 등 장신구 4개
    • 스카이다이빙 트레일 5개
    • 스프레이 14개
    • 장난감 2개
    • 음악 트랙 3개
    • 1,300 V-Bucks
    • 그 외 많은 혜택!',
              'zh-hant' => '第六賽季：現在起至12月6日
  
  立即獲得這些價值3500V幣的物品。
    • 災厄俠客服裝
    • 金碟鐵馬服裝
    • 50%額外賽季比賽經驗
    • 10%額外賽季好友比賽經驗
    • 額外每週挑戰
    • 災厄俠客可進化挑戰
  
  通過遊玩提升英雄季卡戰階，解鎖百餘獎勵（通常需要75到150個小時的遊玩時間）。希望更快嗎？你可以隨時使用V幣購買戰階！
    • 驚懼狼人及其他4套服裝
    • 3個寵物
    • 3個鋤頭
    • 5個姿勢
    • 4個滑翔傘
    • 4個背部裝飾
    • 5個滑翔軌跡
    • 14個塗鴉
    • 2個玩具
    • 3個音軌
    • 1300V幣
    • 以及更多獎勵！',
              'pt-br' => 'Temporada 6: de hoje até 6 de dezembro
  
  Ganhe instantaneamente esses itens avaliados em mais de 3.500 V-Bucks.
    • Traje Calamidade
    • Traje DJ Além
    • 50% de Bônus de EXP da Temporada em Partidas
    • 10% de Bônus de EXP da Temporada em Partidas com Amigos
    • Desafios Semanais Extras
    • Desafios Calamidade Progressivos
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando mais de 100 recompensas (leva em média 75 a 150 horas de jogo). Quer mais rápido? Você pode usar V-Bucks para comprar categorias a qualquer momento!
    • Lupino e mais 4 outros trajes
    • 3 Mascotes
    • 3 Picaretas
    • 5 Gestos
    • 4 Asas-deltas
    • 4 Acessórios para as Costas
    • 5 Rastros de Queda Livre
    • 14 Sprays
    • 2 Brinquedos
    • 3 Faixas Musicais
   • 1.300 V-Bucks
    • e muito mais!',
              'en' => 'Season 6: Now thru Dec 6
  
  Instantly get these items valued at over 3,500 V-Bucks.
    • Calamity Outfit
    • DJ Yonder Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Calamity Progressive Challenges
  
  Play to level up your Battle Pass, unlocking over  100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • Dire plus 4 other outfits
    • 3 Pets
    • 3 Pickaxes
    • 5 Emotes
    • 4 Gliders
    • 4 Back Blings
    • 5 Skydiving Trails
    • 14 Sprays
    • 2 Toys
    • 3 Music Tracks
    • 1,300 V-Bucks
    • and so much more!',
              'it' => 'Stagione 6: Fino al 6 dicembre
  
  Ottieni subito questi oggetti dal valore di oltre 3.500 V-buck!
  • Costume Calamity
  • Costume DJ Yonder
  • Bonus del 50% dei PE partite stagionali
  • Bonus del 10% dei PE partite amico stagionali
  • Sfide settimanali extra
  • Sfide progressive Calamity
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando più di 100 ricompense (per un totale indicativo di 75-150 ore di gioco). Vuoi tutto e subito? Puoi usare i V-buck per acquistare livelli in qualsiasi momento!
  • Manny e altri 4 costumi
  • 3 piccoli amici
  • 3 picconi
  • 5 emote
  • 4 deltaplani
  • 4 dorsi decorativi
  • 5 scie skydive
  • 14 spray
  • 2 giocattoli
  • 3 brani musicali
  • 1.300 V-buck
  • E tanto altro!',
              'fr' => 'Saison 6 : jusqu\'au 6 décembre
  
  Recevez immédiatement ces objets d\'une valeur supérieure à 3500 V-bucks.
    • Tenue Calamité
    • Tenue DJ Lama
    • Bonus d\'EXP de saison de 50%
    • Bonus d\'EXP de saison de 10% pour des amis
    • Des défis hebdomadaires supplémentaires
    • Les défis progressifs de Calamité
  
   Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller plus de 100 récompenses (nécessitant de 75 à 150 heures de jeu). Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !
    • Lycan plus 4 autres tenues
    • 3 compagnons
    • 3 pioches
    • 5 emotes
    • 4 planeurs
    • 4 accessoires de dos
    • 5 traînées de condensation
    • 14 aérosols
    • 2 jouets
    • 3 pistes musicales
    • 1300 V-bucks
    • Et plus !',
              'zh-cn' => '第六赛季：现在起至12月6日
  
  立即获得这些价值3500V币的物品。
    • 灾厄侠客服装
    • 金碟铁马服装
    • 50%额外赛季比赛经验
    • 10%额外赛季好友比赛经验
    • 额外每周挑战
    • 灾厄侠客可进化挑战
  
  通过游玩提升英雄季卡战阶，解锁百余奖励（通常需要75到150个小时的游玩时间）。希望更快吗？你可以随时使用V币购买战阶！
    • 惊惧狼人及其他4套服装
    • 3个宠物
    • 3个锄头
    • 5个姿势
    • 4个滑翔伞
    • 4个背部装饰
    • 5个滑翔轨迹
    • 14个涂鸦
    • 2个玩具
    • 3个音轨
    • 1300V币
    • 以及更多奖励！',
              'es' => 'Temporada 6: desde ahora hasta el 6 de diciembre.
  
  Consigue instantáneamente estos objetos valorados en más de 3500 paVos.
    • Traje de Calamidad.
    • Traje de Llama DJ.
    • Bonificación de PE de partida de temporada del 50 %.
    • Bonificación de PE de partida amistosa de temporada del 10 %.
    • Desafíos semanales adicionales.
    • Desafíos progresivos de Calamidad.
  
  Juega para subir de nivel tu pase de batalla y desbloquea más de 100 recompensas (suele llevar entre 75 y 150 horas de juego). ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!
    • Lobuno más otros 4 trajes.
    • 3 mascotas.
    • 3 picos.
    • 5 gestos.
    • 4 alas delta.
    • 4 accesorios mochileros.
    • 5 estelas de descenso.
    • 14 grafitis.
    • 2 juguetes.
    • 3 pistas musicales.
    • 1300 paVos.
    • ¡Y mucho más!',
              'ar' => 'Season 6: Now thru Dec 6
  
  Instantly get these items valued at over 3,500 V-Bucks.
    • Calamity Outfit
    • DJ Yonder Outfit
    • 50% Bonus Season Match XP
    • 10% Bonus Season Friend Match XP
    • Extra Weekly Challenges
    • Calamity Progressive Challenges
  
  Play to level up your Battle Pass, unlocking over  100 rewards (typically takes 75 to 150 hours of play). Want it all faster? You can use V-Bucks to buy tiers any time!
    • Dire plus 4 other outfits
    • 3 Pets
    • 3 Pickaxes
    • 5 Emotes
    • 4 Gliders
    • 4 Back Blings
    • 5 Skydiving Trails
    • 14 Sprays
    • 2 Toys
    • 3 Music Tracks
    • 1,300 V-Bucks
    • and so much more!',
              'ja' => 'シーズン6: 12月6日まで
  
  3,500 V-Bucks以上の価値があるアイテムを今すぐ手に入れましょう。• 「カラミティ」コスチューム
    • 「DJ ヨンダー」コスチューム
    • シーズンマッチXPの50%ボーナス
    • シーズンフレンドマッチXPの10%ボーナス
    • 追加のウィークリーチャレンジ
    • カラミティプログレッシブチャレンジ
  
  プレイしてバトルパスのレベルを上げると、100以上の報酬をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！
    • ダイアとその他コスチュームx4
    • ペットx3
    • ツルハシx3
    • エモートx5
    • グライダーx4
    • バックアクセサリーx4
    • スカイダイビングトレイルx5
    • スプレーx14
    • おもちゃx2
    • ミュージックx3
    • 1,300 V-Bucks
    • 他にも色々！',
              'pl' => 'Sezon 6: od teraz do 6 grudnia
  
  Otrzymasz od razu poniższe przedmioty o wartości ponad 3500 V-dolców:
    • Strój: Kowbojka
    • Strój: DJ Jak-mu-tam
    • Sezonowa premia +50% PD za grę
    • Sezonowa premia +10% PD za grę ze znajomymi
    • Dostęp do dodatkowych wyzwań tygodnia
    • Dostęp do wyzwań Kowbojki
  
  Graj, aby awansować karnet bojowy i zdobyć łącznie ponad 100 nagród (ich zebranie zajmuje zwykle od 75 do 150 godz. gry). Chcesz się rozwijać szybciej? W każdej chwili możesz kupić stopnie za V-dolce!
    • Straszliwiec plus 4 inne stroje
    • 3 pupile
    • 3 kilofy
    • 5 emotek
    • 4 lotnie
    • 4 plecaki
    • 5 smug
    • 14 graffiti
    • 2 zabawki
    • 3 tła muzyczne
    • 1300 V-dolców
    • I dużo więcej!',
              'es-419' => 'Temporada 6: Ahora hasta el 6 de diciembre
  
  Obtén al instante estos objetos que cuestan más de 3500 monedas V.
    • Atuendo Calamidad
    • Atuendo DJ Llama
    • 50% de bonificación de PE para partidas de la temporada
    • 10% de PE de bonificación para partidas con amigos en la temporada
    • Desafíos semanales adicionales
    • Desafíos progresivos de Calamidad
  
  Juega para subir de nivel el pase de batalla y desbloquear más de 100 recompensas (esto lleva entre 75 y 150 horas de juego). ¿Lo quieres todo más rápido? ¡Usa monedas V para comprar niveles en cualquier momento!
    • Amenaza inminente más otros 4 atuendos
    • 3 mascotas
    • 3 picos
    • 5 gestos
    • 4 planeadores
    • 4 mochilas retro
    • 5 rastros de caída libre
    • 14 aerosoles
    • 2 juguetes
    • 3 pistas de música
    • 1300 monedas V
    • ¡y mucho más!',
              'tr' => '6. Sezon: Şu andan 6 Aralık’a kadar
  
  3.500 V-Papel’in üzerinde değeri olan bu içerikleri hemen edin.
    • Belalı Kovboy Kıyafeti
    • DJ Lama Kıyafeti
    • %50 Bonus Sezonluk Maç TP’si
    • %10 Bonus Sezonluk Arkadaşlar için Maç TP’si
    • İlave Haftalık Görevler
    • İlerlemeli Belalı Kovboy Görevleri
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve 100’den fazla ödülü aç (yaklaşık 75 ila 150 saat oynama gerektirir). Hepsini daha hızlı mı almak istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!
    • Kurtadam artı 4 kıyafet daha
    • 3 Sadık Dost
    • 3 Kazma
    • 5 İfade
    • 4 Planör
    • 4 Sırt Süsü
    • 5 Dalış İzi
    • 14 Sprey
    • 2 Oyuncak
    • 3 Müzik Parçası
    • 1.300 V-Papel
    • ve çok daha fazlası!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season6_BattlePass.DA_BR_Season6_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      13 => 
      array (
        'name' => 'BRSeason7',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => '347A90158C64424980E8C1B3DC088F37',
            'devName' => 'BR.Season7.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '601C6830460BFED07506F5A6D2C4CE7B',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Bundle battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle Pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle Pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison 7: Ab sofort bis 28. Februar
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 10.000 V-Bucks</>.
    • <ItemName>Zenit</> (aufrüstbares Outfit)
    • <ItemName>Luchs</> (aufrüstbares Outfit)
    • <ItemName>Sgt. Winter</> (Outfit und Stilherausforderungen)
    • <ItemName>Hamirez</> (Gefährte)
    • <ItemName>Taktischer Schlitten</> (Hängegleiter)
    • <ItemName>Arktistarnung</> (Lackierung)
    • <ItemName>Perfektes Geschenk</> (Rücken-Accessoire)
    • <ItemName>Lichterkette</> (Kondensstreifen)
    • 300 V-Bucks
    • 1 Musikstück
    • <Bold>+70 %</> Saison-Match-EP
    • <Bold>+20 %</> Saison-Match-EP für Freunde
    • <Bold>zusätzliche wöchentliche Herausforderungen</>
    • und noch mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 75 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <Bold>4 weitere Outfits</>
    • <Bold>1.300 V-Bucks</>
    • 6 Emotes
    • 3 Hängegleiter
    • 4 Rücken-Accessoires
    • 4 Lackierungen
    • 4 Erntwerkzeuge
    • 4 Kondensstreifen
    • 1 Gefährte
    • 12 Spraymotive
    • 2 Musikstücke
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Седьмой сезон: до 28 февраля
  
  Сразу же получите предметы <Bold>стоимостью более 10 000 В-баксов!</>
    • улучшаемая экипировка <ItemName>Снежного снайпера</>;
    • улучшаемая экипировка <ItemName>Неоновой Рыси</>;
    • экипировка <ItemName>генерала Мороза</> и испытания стиля;
    • питомец <ItemName>Хома</>;
    • дельтаплан <ItemName>«Боевые сани»</>;
    • обёртка <ItemName>«Арктический камуфляж»</>;
    • украшение на спину <ItemName>«Подарочки»</>;
    • воздушный след <ItemName>«Гирлянда»</>;
    • 300 В-баксов;
    • 1 музыкальная композиция;
    • <Bold>+70% к опыту</> за матчи сезона;
    • <Bold>+20% к опыту</> друзей за матчи сезона;
    • <Bold>дополнительные еженедельные испытания</>
   и многое другое.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут <Bold>более 75 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • <Bold>ещё 4 костюма;</>
    • <Bold>1300 В-баксов</>;
    • 6 эмоций
  ;  • 3 дельтаплана;
    • 4 украшения на спину;
    • 4 обёртки;
    • 4 инструмента;
    • 4 воздушных следа;
    • 1 питомец;
    • 12 граффити;
    • 2 музыкальные композиции;
      и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 7: 2월 28일 종료
  
  <Bold>10,000 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>제니스</> 진화형 의상
    • <ItemName>링스</> 진화형 의상
    • <ItemName>윈터 병장</> 의상 및 스타일 도전
    • <ItemName>하미레스</> 애완동물
    • <ItemName>전술 썰매</> 글라이더
    • <ItemName>극지방 위장 패턴</> 외관
    • <ItemName>완벽한 선물</> 등 장신구
    • <ItemName>줄조명</> 스카이다이빙 트레일
    • 300 V-Bucks
    • 음악 트랙 1개
    • <Bold>70% 보너스</> 시즌 매치 XP
    • <Bold>20% 보너스</> 시즌 친구 매치 XP
    • <Bold>추가 주간 도전</>
    • 기타 보상!
  
  배틀패스 티어를 올려서 <Bold>75개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <Bold>의상 4개</>
    • <Bold>1,300 V-Bucks</>
    • 이모트 6개
    • 글라이더 3개
    • 등 장신구 4개
    • 외관 4개
    • 수확 도구 4개
    • 스카이다이빙 트레일 4개
    • 애완동물 1개
    • 스프레이 12개
    • 음악 트랙 2개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第七賽季：現在起至2月28日
  
  立即獲得這些價值10000V幣的物品。
    • <ItemName>蒼穹</>可進化服裝
    • <ItemName>山貓</>可進化服裝
    • <ItemName>冬軍衛士</>服裝與風格挑戰
    • <ItemName>竹鼠</>寵物
    • <ItemName>戰術雪橇</>滑翔傘
    • <ItemName>極地迷彩</> 皮膚
  • <ItemName>完美禮物</>背部裝飾
    • <ItemName>燈串</>滑翔軌跡
    • 300 V幣
    • 1個音樂盒
    • 70%額外賽季比賽經驗
    • 20%額外賽季好友比賽經驗
    • 額外每週挑戰
    • 以及更多獎勵！
  
  通過遊玩提升英雄季卡戰階，解鎖至少75個獎勵（通常需要75到150個小時的遊玩時間）。
    • <Bold>4個額外服裝</>
    • <Bold>1,300V幣</>
    • 6個姿勢
    • 3個滑翔傘
    • 4個背包
    • 4 個皮膚
    • 4個稿
    • 4個滑翔軌跡
    • 1個寵物
    • 12個塗鴉
    • 2個音樂盒
    •以及更多獎勵！
  希望更快嗎？你可以隨時使用V幣購買戰階！',
              'pt-br' => 'Temporada 7: De hoje até 28 de fevereiro
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 10.000 V-Bucks</>:
    • Traje Progressivo <ItemName>Zênite</>
    • Traje Progressivo <ItemName>Lince</>
    • Traje e Desafios Estilo <ItemName>Sargento Inverno</>
    • Mascote <ItemName>Hamsterzínea</>
    • Asa-delta <ItemName>Trenó Tático</>
    • Envelopamento <ItemName>Camuflagem Ártica</>
    • Acessório para as Costas <ItemName>Presente Perfeito</>
    • Rastro de Fumaça <ItemName>Pisca-Pisca</>
    • 300 V-Bucks
    • 1 Faixa Musical
    • <Bold>70% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>20% de Bônus</> de EXP da Temporada em Partidas com Amigos
    • <Bold>Desafios Semanais Extras</>
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 75 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <Bold>Mais 4 Trajes</>
    • <Bold>1.300 V-Bucks</>
    • 6 Gestos
    • 3 Asas-deltas
    • 4 Acessórios para as Costas
    • 4 Envelopamentos
    • 4 Ferramentas de Coleta
    • 4 Rastros de Fumaça
    • 1 Mascote
    • 12 Sprays
    • 2 Faixas Musicais
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season 7: Now thru Feb 28
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>Zenith</> Progressive Outfit
    • <ItemName>Lynx</> Progressive Outfit
    • <ItemName>Sgt. Winter</> Outfit and Style Challenges
    • <ItemName>Hamirez</> Pet
    • <ItemName>Tactical Sleigh</> Glider
    • <ItemName>Arctic Camo</> Wrap
    • <ItemName>Perfect Present</> Back Bling
    • <ItemName>String Lights</> Contrail
    • 300 V-Bucks
    • 1 Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>20% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 6 Emotes
    • 3 Gliders
    • 4 Back Blings
    • 4 Wraps
    • 4 Harvesting Tools
    • 4 Contrails
    • 1 Pet
    • 12 Sprays
    • 2 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione 7: Fino al 28 febbraio
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 10.000 V-buck</>!
  • Costume progressivo <ItemName>Zenith</>
  • Costume progressivo <ItemName>Lynx</>
  • Costume e sfide stile <ItemName>sergente Bruma</>
  • Piccolo amico <ItemName>Hamirez</>
  • Deltaplano <ItemName>Slitta tattica</>
  • Copertura <ItemName>mimetica artica</>
  • Dorso decorativo <ItemName>Regalo perfetto</>
  • Scia <ItemName>Luci a filo</>
  • 300 V-buck
  • 1 brano musicale
  • <Bold>Bonus del 70%</> dei PE partite stagionali
  • <Bold>Bonus del 20%</> dei PE partite amico stagionali
  • <Bold>Sfide settimanali extra</>
  • E altro ancora!
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando <Bold>più di 75 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
  • <Bold>4 costumi in più</>
  • <Bold>1.300 V-buck</>
  • 6 emote
  • 3 deltaplani
  • 4 dorsi decorativi
  • 4 coperture
  • 4 strumenti di raccolta
  • 4 scie
  • 1 piccolo amico
  • 12 spray
  • 2 brani musicali
  • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison 7 : jusqu\'au 28 février
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 10 000 V-bucks</>.
    • Tenue évolutive <ItemName>Zénith</>
    • Tenue évolutive <ItemName>Lynx</>
    • Tenue évolutive <ItemName>Sergent Frimas</> et défis de style
    • Le compagnon <ItemName>Hamirez</>
    • Planeur <ItemName>Traîneau tactique</>
    • Revêtement <ItemName>Camouflage arctique</>
    • Accessoire de dos <ItemName>Cadeau idéal</>
    • Traînée de condensation <ItemName>Guirlandes électriques</>
    • 300 V-bucks
    • 1 piste musicale
    • Bonus d\'EXP de saison de 70%
    • Bonus d\'EXP de saison de 20% pour des amis
    • <Bold>Des défis hebdomadaires supplémentaires</>
    • Et plus !
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 75 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <Bold>4 autres tenues</>
    • <Bold>1300 V-bucks</>
    • 6 emotes
    • 3 planeurs
    • 4 accessoires de dos
    • 4 revêtements
    • 4 pioches
    • 4 traînées de condensation
    • 1 compagnon
    • 12 aérosols
    • 2 pistes musicales
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第七赛季：现在起至2月28日
  
  立即获得这些价值10000V币的物品。
    • <ItemName>苍穹</>可进化服装
    • <ItemName>山猫</>可进化服装
    • <ItemName>冬军卫士</>服装与风格挑战
    • <ItemName>竹鼠</>宠物
    • <ItemName>战术雪橇</>滑翔伞
    • <ItemName>极地迷彩</> 皮肤
  • <ItemName>完美礼物</>背部装饰
    • <ItemName>灯串</>滑翔轨迹
    • 300 V币
    • 1个音乐盒
    • 70%额外赛季比赛经验
    • 20%额外赛季好友比赛经验
    • 额外每周挑战
    • 以及更多奖励！
  
  通过游玩提升英雄季卡战阶，解锁至少75个奖励（通常需要75到150个小时的游玩时间）。
    • <Bold>4个额外服装</>
    • <Bold>1,300V币</>
    • 6个姿势
    • 3个滑翔伞
    • 4个背包
    • 4 个皮肤
    • 4个稿
    • 4个滑翔轨迹
    • 1个宠物
    • 12个涂鸦
    • 2个音乐盒
    •以及更多奖励！
  希望更快吗？你可以随时使用V币购买战阶！',
              'es' => 'Temporada 7: Desde ahora hasta el 28 de febrero
  
  Consigue instantáneamente estos objetos <Bold>valorados en más de 10 000 paVos</>.
    • Traje progresivo de <ItemName>Cénit</>.
    • Traje progresivo de <ItemName>Lince</>.
    • Traje y desafíos de estilo del <ItemName>General Invierno</>.
    • Mascota <ItemName>Hamírez</>.
    • Ala delta <ItemName>Trineo táctico</>.
    • Envoltorio <ItemName>Camuflaje ártico</>.
    • Accesorio mochilero <ItemName>Presente perfecto</>.
    • Estela <ItemName>Luces de colores</>.
    • 300 paVos.
    • 1 pista musical.
    • <Bold>70 % adicional</> de PE de partida de temporada.
    • <Bold>20 % adicional</> de PE de partida amistosa de temporada.
    • <Bold>Desafíos semanales adicionales</>.
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquea <Bold>más de 75 recompensas</> (suele llevar entre 75 y 150 horas de juego).
    • <Bold>4 trajes más</>.
    • <Bold>1300 paVos</>.
    • 6 gestos.
    • 3 alas delta.
    • 4 accesorios mochileros.
    • 4 envoltorios.
    • 4 herramientas de recolección.
    • 4 estelas.
    • 1 mascota.
    • 12 grafitis.
    • 2 pistas musicales.
    • ¡Y muchísimo más!
  ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season 7: Now thru Feb 28
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>Zenith</> Progressive Outfit
    • <ItemName>Lynx</> Progressive Outfit
    • <ItemName>Sgt. Winter</> Outfit and Style Challenges
    • <ItemName>Hamirez</> Pet
    • <ItemName>Tactical Sleigh</> Glider
    • <ItemName>Arctic Camo</> Wrap
    • <ItemName>Perfect Present</> Back Bling
    • <ItemName>String Lights</> Contrail
    • 300 V-Bucks
    • 1 Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>20% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 6 Emotes
    • 3 Gliders
    • 4 Back Blings
    • 4 Wraps
    • 4 Harvesting Tools
    • 4 Contrails
    • 1 Pet
    • 12 Sprays
    • 2 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズン7: 2月28日まで
  
  <Bold>10,000 V-Bucks以上の価値</>があるアイテムを今すぐ手に入れましょう。
    • <ItemName>「ゼニス」</>プログレッシブコスチューム
    • <ItemName>「リンクス」</>プログレッシブコスチューム
    • <ItemName>「サージェント ウィンター」</>コスチューム及びスタイルチャレンジ
    • <ItemName>「ハミレス」</>ペット
    • <ItemName>「タクティカルスレイ」グライダー</>
    • <ItemName>「アークティックカモ」</>ラップ
    • <ItemName>「パーフェクトプレゼント」</>バックアクセサリー
    • <ItemName>「ストリングライト」</>コントレイル
    • 300 V-Bucks
    • ミュージックx1
    • シーズンマッチXPの<Bold>70%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>20%ボーナス</>
    • <Bold>追加のウィークリーチャレンジ</>
    • 他にも色々！
  
  プレイしてバトルパスのレベルを上げると、<Bold>75個以上の報酬</>をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。
    • <Bold>コスチュームx4以上</>
    • <Bold>1,300 V-Bucks</>
    • エモートx6
    • グライダーx3
    • バックアクセサリーx4
    • ラップx4
    • 収集ツールx4
    • コントレイルx4
    • ペットx1
    • スプレーx12
    • ミュージックトラックx2
    • 他にも色々！
  もっと早く報酬を全部集めたいなら、V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Sezon 7: od teraz do 28 lutego
  
  Otrzymasz od razu poniższe przedmioty <Bold>o wartości ponad 10 000 V-dolców</>:
    • Strój progresywny: <ItemName>Zenit</>
    • Strój progresywny: <ItemName>Puma</>
    • Strój i wyzwania stylów <ItemName>Sierżant Zima</>
    • Pupil <ItemName>Chomirez</>
    • Lotnia <ItemName>Sanie Szturmowe</>
    • Malowanie <ItemName>Zimowy kamuflaż</>
    • Plecak <ItemName>Przemyślany Prezent</>
    • Smuga <ItemName>Sznur lampek</>
    • 300 V-dolców
    • 1 tło muzyczne
    • Sezonowa <Bold>premia +70% PD za grę</>
    • Sezonowa <Bold>premia +20% PD za grę ze znajomymi</>
    • Dostęp do <Bold>dodatkowych wyzwań tygodniowych</>
    • I nie tylko!
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 75 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godz. gry).
    • <Bold>4 dodatkowe stroje</>
    • <Bold>1300 V-dolców</>
    • 6 emotek
    • 3 lotnie
    • 4 plecaki
    • 4 malowania
    • 4 zbieraki
    • 4 smugi
    • 1 pupil
    • 12 graffiti
    • 2 tła muzyczne
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Temporada 7: Ahora hasta el 28 de febrero
  
  Obtén al instante estos objetos <Bold>que cuestan más de 10 000 monedas V</>.
    • Atuendo progresivo <ItemName>Cenit</>
    • Atuendo progresivo <ItemName>Lince</>
    • Atuendo y desafíos de estilo de <ItemName>Sargento Invierno</>
    • Mascota <ItemName>Hamírez</>
    • Planeador <ItemName>Trineo táctico</>
    • Papel <ItemName>Camu ártico</>
    • Mochila retro <ItemName>Regalo perfecto</>
    • Estela <ItemName>Luces colgantes</>
    • 300 monedas V
    • 1 pista de música
    • <Bold>70 % de bonificación</> de PE para partidas en la temporada
    • <Bold>20 % de bonificación</> de PE para partidas con amigos en la temporada
    • <Bold>Desafíos semanales adicionales</>
    • ¡Y mucho más!
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 75 recompensas</> (esto lleva entre 75 y 150 horas de juego).
    • <Bold>4 atuendos más</>
    • <Bold>1300 monedas V</>
    • 6 gestos
    • 3 planeadores
    • 4 mochilas retro
    • 4 papeles
    • 4 herramientas de recolección
    • 4 estelas
    • 1 mascota
    • 12 aerosoles
    • 2 pistas de música
    • ¡Y mucho más!
  ¿Lo quieres todo más rápido? ¡Puedes usar las monedas V para comprar niveles cuando quieras!',
              'tr' => '7. Sezon: Şu andan 28 Şubat’a kadar
  
  <Bold>10.000 V-Papel’in üzerinde değeri olan</> bu içerikleri hemen kap.
    • İlerlemeli <ItemName>Karakulak</> Kıyafeti
    • İlerlemeli <ItemName>Kutup Dağcısı</> Kıyafeti
    • <ItemName>Kış Çavuşu</> Kıyafeti ve Tarz Görevleri
    • Sadık Dost <ItemName>Hamirez</>
    • <ItemName>Roketli Kızak Planörü</>
    • <ItemName>Kutup Kamuflajı</> Kaplaması
    • <ItemName>Mükemmel Hediye</> Sırt Süsü
    • <ItemName>Yılbaşı Işıkları</> Dalış İzi
    • 300 V-Papel
    • 1 Müzik Parçası
    • <Bold>%70 Bonus</> sezonluk Maç TP’si
    • Arkadaşların için <Bold>%20 Bonus</> Sezonluk Maç TP’si
    • <Bold>İlave Haftalık Görevler</>
    • ve çok daha fazlası!
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve <Bold>75’ten fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <Bold>4 Kıyafet daha</>
    • <Bold>1.300 V-Papel</>
    • 6 İfade
    • 3 Planör
    • 4 Sırt Süsü
    • 4 Kaplama
    •  4 Toplama Aleti
    • 4 Dalış İzi
    • 1 Sadık Dost
    • 12 Sprey
    • 2 Müzik Parçası
    • ve çok daha fazlası!
  Hepsini daha hızlı almak mı istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season7_BattlePassWithLevels.DA_BR_Season7_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => '3A3C99847F144AF3A030DB5690477F5A',
            'devName' => 'BR.Season7.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '601C6830460BFED07506F5A6D2C4CE7B',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison 7',
              'ru' => 'Седьмой сезон',
              'ko' => '시즌 7',
              'zh-hant' => '第七賽季',
              'pt-br' => 'Temporada 7',
              'en' => 'Season 7',
              'it' => 'Stagione 7',
              'fr' => 'Saison 7',
              'zh-cn' => '第七赛季',
              'es' => 'Temporada 7',
              'ar' => 'Season 7',
              'ja' => 'シーズン7',
              'pl' => 'Sezon 7',
              'es-419' => 'Temporada 7',
              'tr' => '7. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison 7: Ab sofort bis 28. Februar
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 3.500 V-Bucks</>.
    • <ItemName>Zenit</> (aufrüstbares Outfit)
    • <ItemName>Luchs</> (aufrüstbares Outfit)
    • <Bold>+50 %</> Saison-Match-EP
    • <Bold>+10 %</> Saison-Match-EP für Freunde
    • <Bold>zusätzliche wöchentliche Herausforderungen</>
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 100 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <ItemName>Sgt. Winter</> und <Bold>4 weitere Outfits</>
    • <Bold>1.300 V-Bucks</>
    • 2 Gefährten
    • 6 Lackierungen
    • 4 Erntewerkzeuge
    • 7 Emotes
    • 2 Spielsachen
    • 4 Hängegleiter
    • 6 Rücke-Accessoires
    • 5 Kondensstreifen
    • 13 Spraymotive
    • 3 Musikstücke
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Седьмой сезон: до 28 февраля
  
  Сразу же получите предметы <Bold>стоимостью более 3500 В-баксов!</>
    • улучшаемая экипировка <ItemName>Снежного снайпера</>;
    • улучшаемая экипировка <ItemName>Неоновой Рыси</>;
    • <Bold>+50% к опыту</> за матчи сезона;
    • <Bold>+10% к опыту</> друзей за матчи сезона;
    • <Bold>дополнительные еженедельные испытания.</>
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут <Bold>более 100 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • экипировка <ItemName>генерала Мороза</> и <Bold>ещё 4 костюма;</>
    • <Bold>1300 В-баксов;</>
    • 2 питомца;
    • 6 обёрток;
    • 4 инструмента;
    • 7 эмоций;
    • 2 игрушки;
    • 4 дельтаплана;
    • 6 украшений на спину;
    • 5 воздушных следов;
    • 13 граффити;
    • 3 музыкальные композиции;
      и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 7: 2월 28일 종료
  
  <Bold>3,500 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>제니스</> 진화형 의상
    • <ItemName>링스</> 진화형 의상
    • <Bold>50% 보너스</> 시즌 매치 XP
    • <Bold>10% 보너스</> 시즌 친구 매치 XP
    • <Bold>추가 주간 도전</>
  
    • 게임을 플레이하고 배틀패스 티어를 올려서 <Bold>100개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <ItemName>윈터 병장</> 외 <Bold>의상 4개</>
    • <Bold>1,300 V-Bucks</>
    • 애완동물 2개
    • 외관 6개
    • 수확 도구 4개
    • 이모트 7개
    • 장난감 2개
    • 글라이더 4개
    • 등 장신구 6개
    • 스카이다이빙 트레일 5개
    • 스프레이 13개
    • 음악 트랙 3개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第七賽季：現在起至2月28日
  
  立即獲得這些<Bold>價值3500V幣</>的物品。
    • <ItemName>蒼穹</>可進化服裝
    • <ItemName>山貓</>可進化服裝
    • <Bold>50%額外</>賽季比賽經驗
    • <Bold>10%額外</>賽季好友比賽經驗
    • <Bold>額外每週挑戰</>
  
  通過遊玩提升英雄季卡戰階，解鎖<Bold>百餘獎勵</>（通常需要75到150個小時的遊玩時間）。
    • <ItemName>冬軍衛士</>和<Bold>至少4套服裝</>
    • <Bold>1300V幣</>
    • 2個寵物
    • 6個包裝
    • 4個採集工具
    • 7個姿勢
    • 2個玩具
    • 4個滑翔傘
    • 6個背部裝飾
    • 5個滑翔軌跡
    • 13個塗鴉
    • 3個音軌
    • 以及更多獎勵！
  希望更快得到嗎？你可以隨時使用V幣購買戰階！',
              'pt-br' => 'Temporada 7: De hoje até 28 de fevereiro
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 3.500 V-Bucks</>:
    • Traje Progressivo <ItemName>Zênite</>
    • Traje Progressivo <ItemName>Lince</>
    • <Bold>50% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>10% de Bônus</> de EXP da Temporada em Partidas com Amigos
    • <Bold>Desafios Semanais Extras</>
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 100 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <ItemName>Sargento Inverno</> e <Bold>mais 4 Trajes</>
    • <Bold>1.300 V-Bucks</>
    • 2 Mascotes
    • 6 Envelopamentos
    • 4 Ferramentas de Coleta
    • 7 Gestos
    • 2 Brinquedos
    • 4 Asas-deltas
    • 6 Acessórios para as Costas
    • 5 Rastros de Fumaça
    • 13 Sprays
    • 3 Faixas Musicais
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season 7: Now thru Feb 28
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>Zenith</> Progressive Outfit
    • <ItemName>Lynx</> Progressive Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>10% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Sgt. Winter</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 2 Pets
    • 6 Wraps
    • 4 Harvesting Tools
    • 7 Emotes
    • 2 Toys
    • 4 Gliders
    • 6 Back Blings
    • 5 Contrails
    • 13 Sprays
    • 3 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione 7: Fino al 28 febbraio
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 3.500 V-buck</>!
  • Costume progressivo <ItemName>Zenith</>
  • Costume progressivo <ItemName>Lynx</>
  • <Bold>Bonus del 50%</> dei PE partite stagionali
  • <Bold>Bonus del 10%</> dei PE partite amico stagionali
  • <Bold>Sfide settimanali extra</>
  
  Gioca per aumentare di livello il tuo Pass battaglia, sbloccando <Bold>più di 100 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
  <ItemName>Sergente Bruma</> e <Bold>altri 4 costumi</>
  • <Bold>1.300 V-buck</>
  • 2 piccoli amici
  • 6 coperture
  • 4 strumenti di raccolta
  • 7 emote
  • 2 giocattoli
  • 4 deltaplani
  • 6 dorsi decorativi
  • 5 scie
  • 13 spray
  • 3 brani musicali
   • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison 7 : jusqu\'au 28 février
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 3500 V-bucks</>.
    • Tenue évolutive <ItemName>Zénith</>
    • Tenue évolutive <ItemName>Lynx</>
    • Bonus d\'EXP de saison de 50%
    • Bonus d\'EXP de saison de 10% pour des amis
    • <Bold>Des défis hebdomadaires supplémentaires</>
  
   Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 100 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <ItemName>Sergent Frimas</> plus <Bold>4 autres tenues</>
    • <Bold>1300 V-bucks</>
    • 2 compagnons
    • 6 revêtements
    • 4 pioches
    • 7 emotes
    • 2 jouets
    • 4 planeurs
    • 6 accessoires de dos
    • 5 traînées de condensation
    • 13 aérosols
    • 3 pistes musicales
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第七赛季：现在起至2月28日
  
  立即获得这些<Bold>价值3500V币</>的物品。
    • <ItemName>苍穹</>可进化服装
    • <ItemName>山猫</>可进化服装
    • <Bold>50%额外</>赛季比赛经验
    • <Bold>10%额外</>赛季好友比赛经验
    • <Bold>额外每周挑战</>
  
  通过游玩提升英雄季卡战阶，解锁<Bold>百余奖励</>（通常需要75到150个小时的游玩时间）。
    • <ItemName>冬军卫士</>和<Bold>至少4套服装</>
    • <Bold>1300V币</>
    • 2个宠物
    • 6个包装
    • 4个采集工具
    • 7个姿势
    • 2个玩具
    • 4个滑翔伞
    • 6个背部装饰
    • 5个滑翔轨迹
    • 13个涂鸦
    • 3个音轨
    • 以及更多奖励！
  希望更快得到吗？你可以随时使用V币购买战阶！',
              'es' => 'Temporada 7: Desde ahora hasta el 28 de febrero
  
  Consigue instantáneamente estos objetos <Bold>valorados en más de 3500 paVos</>.
    • Traje progresivo de <ItemName>Cénit</>.
    • Traje progresivo de <ItemName>Lince</>.
    • <Bold>50 % adicional</> de PE de partida de temporada.
    • <Bold>10 % adicional</> de PE de partida amistosa de temporada.
    • <Bold>Desafíos semanales adicionales</>.
  
  Juega para subir de nivel tu pase de batalla y desbloquea <Bold>más de 100 recompensas</> (suele llevar entre 75 y 150 horas de juego).
    • <ItemName>General Invierno</> y <Bold>4 trajes más</>.
    • <Bold>1300 paVos</>.
    • 2 mascotas.
    • 6 envoltorios.
    • 4 herramientas de recolección.
    • 7 gestos.
    • 2 juguetes.
    • 4 alas delta.
    • 6 accesorios mochileros.
    • 5 estelas.
    • 13 grafitis.
    • 3 pistas musicales.
    • ¡Y muchísimo más!
  ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season 7: Now thru Feb 28
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>Zenith</> Progressive Outfit
    • <ItemName>Lynx</> Progressive Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>10% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Sgt. Winter</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 2 Pets
    • 6 Wraps
    • 4 Harvesting Tools
    • 7 Emotes
    • 2 Toys
    • 4 Gliders
    • 6 Back Blings
    • 5 Contrails
    • 13 Sprays
    • 3 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズン7: 2月28日まで
  
  <Bold>3,500 V-Bucks以上の価値</>があるアイテムを今すぐ手に入れましょう。• <ItemName>「ゼニス」</>プログレッシブコスチューム
    • <ItemName>「リンクス」</>プログレッシブコスチューム
    • シーズンマッチXPの<Bold>50%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>10%ボーナス</>
    • <Bold>追加のウィークリーチャレンジ</>
  
  プレイしてバトルパスのレベルを上げると、<Bold>100以上の報酬</>をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。
    •<ItemName>「サージェント ウィンター」</>及びコスチューム<Bold>x4以上</>
    • <Bold>1,300 V-Bucks</>
    • ペットx2
    • ラップx6
    • 収集ツールx4
    • エモートx7
    • おもちゃx2
    • グライダーx4
    • バックアクセサリーx6
    • コントレイルx5
    • スプレーx13
    • ミュージックトラックx3
   • 他にも色々！
  もっと早く報酬を全部集めたいなら、V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Sezon 7: od teraz do 28 lutego
  
  Otrzymasz od razu poniższe przedmioty <Bold>o wartości ponad 3500 V-dolców</>:
    • Strój progresywny: <ItemName>Zenit</>
    • Strój progresywny: <ItemName>Puma</>
    • Sezonowa <Bold>premia +50% PD za grę</>
    • Sezonowa <Bold>premia +10% PD za grę ze znajomymi</>
    • Dostęp do <Bold>dodatkowych wyzwań tygodniowych</>
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 100 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godz. gry).
    • <ItemName>Sierżant Zima</> i <Bold>4 inne stroje</>
    • <Bold>1300 V-dolców</>
    • 2 pupile
    • 6 malowań
    • 4 zbieraki
    • 7 emotek
    • 2 zabawki
    • 4 lotnie
    • 6 plecaków
    • 5 smug
    • 13 graffiti
    • 3 tła muzyczne
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Temporada 7: Ahora hasta el 28 de febrero
  
  Obtén al instante estos objetos <Bold>que cuestan más de 3500 monedas V</>.
    • Atuendo progresivo <ItemName>Cenit</>
    • Atuendo progresivo <ItemName>Lince</>
    • <Bold>50 % de bonificación</> de PE para partidas de la temporada
    • <Bold>10 % de bonificación</> de PE para partidas con amigos en la temporada
    • <Bold>Desafíos semanales adicionales</>
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 100 recompensas</> (esto lleva entre 75 y 150 horas de juego).
    • <ItemName>Sargento Invierno</> y <Bold>4 atuendos más</>
    • <Bold>1300 monedas V</>
    • 2 mascotas
    • 6 papeles
    • 4 herramientas de recolección
    • 7 gestos
    • 2 juguetes
    • 4 planeadores
    • 6 mochilas retro
    • 5 estelas
    • 13 aerosoles
    • 3 pistas de música
    • ¡Y mucho más!
  ¿Lo quieres todo más rápido? ¡Puedes usar las monedas V para comprar niveles cuando quieras!',
              'tr' => '7. Sezon: Şu andan 28 Şubat’a kadar
  
  <Bold>3.500 V-Papel’in üzerinde değeri olan</> bu içerikleri hemen kap.
    • İlerlemeli <ItemName>Kutup Dağcısı</> Kıyafeti
    • İlerlemeli <ItemName>Karakulak</> Kıyafeti
    • <Bold>%50 Bonus</> Sezonluk Maç TP’si
    • Arkadaşların için <Bold>%10 Bonus</> Sezonluk Maç TP’si
    • <Bold>İlave Haftalık Görevler</>
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve <Bold>100’den fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <ItemName>Kış Çavuşu</> ve <Bold>4 Kıyafet</> daha
    • <Bold>1,300 V-Papel</>
    • 2 Sadık Dost
    • 6 Kaplama
    • 4 Toplama Aleti
    • 7 İfade
    • 2 Oyuncak
    • 4 Planör
    • 6 Sırt Süsü
    • 5 Dalış İzi
    • 13 Sprey
    • 3 Müzik Parçası
    • ve çok daha fazlası!
  Hepsini daha hızlı mı almak istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season7_BattlePass.DA_BR_Season7_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => '64A3020B098841A7805EE257D68C554F',
            'devName' => 'BR.Season7.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle-Pass-Stufe',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 티어',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Categoria de Passe de Batalha',
              'en' => 'Battle Pass Tier',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Palier du Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Nivel del pase de batalla',
              'ar' => 'Battle Pass Tier',
              'ja' => 'バトルパスティア',
              'pl' => 'Stopień karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 얻어보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => 'ステキな報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödüllerin sahibi ol!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      14 => 
      array (
        'name' => 'BRSeason8',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => '18D9DA48000A40BFAEBAC55A99C55221',
            'devName' => 'BR.Season8.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '9DF02EA14FB15E475EBBEBBFDBB988DB',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Bundle battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle Pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle Pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison 8 – Ab sofort bis einschließlich 8. Mai
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 10.000 V-Bucks</>.
    • <ItemName>Schwarzherz</> (aufrüstbares Outfit)
    • <ItemName>Hybrid</> (aufrüstbares Outfit)
    • <ItemName>Klapperschlange</> (Outfit)
    • <ItemName>Tropentarnung</> (Lackierung)
    • <ItemName>Stöckchen</> (Gefährte)
    • <ItemName>Himmelsschlangen</> (Hängegleiter)
    • <ItemName>Kobra</> (Rücken-Accessoire)
    • <ItemName>Wehende Standarte</> (Kondensstreifen)
    • 300 V-Bucks
    • 1 Musikstück
    • <Bold>+70 %</> Saison-Match-EP
    • <Bold>+20 %</> Saison-Match-EP für Freunde
    • <Bold>zusätzliche wöchentliche Herausforderungen</>
    • und noch mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 75 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <Bold>4 weitere Outfits</>
    • <Bold>1.000 V-Bucks</>
    • 6 Emotes
    • 5 Lackierungen
    • 3 Hängegleiter
    • 3 Rücken-Accessoires
    • 4 Erntewerkzeuge
    • 4 Kondensstreifen
    • 1 Gefährte
    • 12 Spraymotive
    • 2 Musikstücke
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Восьмой сезон: до 8 мая
  
  Сразу же получите предметы <Bold>стоимостью более 10 000 В-баксов!</>
    • Улучшающаяся экипировка <ItemName>Флибустьера</>;
    • улучшающаяся экипировка <ItemName>Гибрида</>;
    • экипировка <ItemName>Горгоны</>;
    • обёртка <ItemName>«Тропики»</>;
    • питомец <ItemName>Псиноккио</>;
    • дельтаплан <ItemName>«Воздушные змеи»</>;
    • украшение на спину <ItemName>«Кобра»</>;
    • воздушный след <ItemName>«Чёрный флаг»</>;
    • 300 В-баксов;
    • 1 музыкальная композиция;
    • <Bold>+70% к опыту</> за матчи сезона;
    • <Bold>+20% к опыту</> друзей за матчи сезона;
    • <Bold>дополнительные еженедельные испытания</>
   и многое другое.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут <Bold>более 75 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • <Bold>ещё 4 костюма;</>
    • <Bold>1000 В-баксов</>;
    • 6 эмоций;
    • 5 обёрток;
    • 3 дельтаплана;
    • 3 украшения на спину;
    • 4 инструмента;
    • 4 воздушных следа;
    • 1 питомец;
    • 12 граффити;
    • 2 музыкальные композиции
      и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 8: 5월 8일 종료
  
  <Bold>10,000 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>블랙하트</> 진화형 의상
    • <ItemName>하이브리드</> 진화형 의상
    • <ItemName>사이드와인더</> 의상
    • <ItemName>열대 지방 위장 패턴</> 외관
    • <ItemName>우지</> 애완동물
    • <ItemName>하늘뱀</> 글라이더
    • <ItemName>코브라</> 등 장신구
    • <ItemName>공중 깃발</> 트레일
    • 300 V-Bucks
    • 음악 트랙 1개
    • <Bold>70% 보너스</> 시즌 매치 XP
    • <Bold>20% 보너스</> 시즌 친구 매치 XP
    • <Bold>추가 주간 도전</>
    • 그 외 더 많은 혜택!
  
  게임을 플레이하고 배틀패스 티어를 올려서 <Bold>75개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <Bold>추가 의상 4개</>
    • <Bold>1,000 V-Bucks</>
    • 이모트 6개
    • 외관 5개
    • 글라이더 3개
    • 등 장신구 3개
    • 수확 도구 4개
    • 트레일 4개
    • 애완동물 1마리
    • 스프레이 12개
    • 음악 트랙 2개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第八賽季：現在起至5月8日
  
  立即獲得這些<Bold>價值逾10000V幣</>的物品。
    • <ItemName>黑鬍子</>可進化服裝
    • <ItemName>忍者龍</>可進化服裝
    • <ItemName>響尾蛇</>服裝
    • <ItemName>熱帶迷彩</>皮膚
    • <ItemName>木雕汪</>寵物
    • <ItemName>空中飛蛇</>滑翔傘
    • <ItemName>眼鏡蛇</>背部裝飾
    • <ItemName>飛行掛旗</>滑翔軌跡
    • 300V幣
    • 1個音軌
    • <Bold>70%額外</>賽季匹配經驗
    • <Bold>20%額外</>賽季好友匹配經驗
    • <Bold>額外每週挑戰</>
    • 以及更多獎勵！
  
  通過遊玩提升英雄季卡戰階，解鎖<Bold>至少75個獎勵</>（通常需要75到150個小時的遊玩時間）。
    • <Bold>4個額外服裝</>
    • <Bold>1000V幣</>
    • 6個姿勢
    • 5個皮膚
    • 3個滑翔傘
    • 3個背部裝飾
    • 4個鎬
    • 4個滑翔軌跡
    • 1個寵物
    • 12個塗鴉
    • 2個音軌
    • 以及更多獎勵！
  希望更快得到所有獎勵嗎？你可以隨時使用V幣購買戰階！',
              'pt-br' => 'Temporada 8: de hoje até 8 de maio
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 10.000 V-Bucks</>.
    • Traje Progressivo <ItemName>Coração Negro</>
    • Traje Progressivo <ItemName>Híbrido</>
    • Traje <ItemName>Cascavel</>
    • Envelopamento <ItemName>Camuflagem Tropical</>
    • Mascote <ItemName>Madeiríneo</>
    • Asa-delta <ItemName>Serpentes dos Céus</>
    • Acessório para as Costas <ItemName>Naja</>
    • Rastro de Fumaça <ItemName>Estandarte de Voo</>
    • 300 V-Bucks
    • 1 Faixa Musical
    • <Bold>70% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>20% de Bônus</> de EXP da Temporada em Partidas com Amigos
    • <Bold>Desafios Semanais Extras</>
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 75 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <Bold>Mais 4 Trajes</>
    • <Bold>1.000 V-Bucks</>
    • 6 Gestos
    • 5 Envelopamentos
    • 3 Asas-deltas
    • 3 Acessórios para as Costas
    • 4 Ferramentas de Coleta
    • 4 Rastros de Fumaça
    • 1 Mascote
    • 12 Sprays
    • 2 Faixas Musicais
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season 8 Now thru May 8
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>Blackheart</> Progressive Outfit
    • <ItemName>Hybrid</> Progressive Outfit
    • <ItemName>Sidewinder</> Outfit
    • <ItemName>Tropical Camo</> Wrap
    • <ItemName>Woodsy</> Pet
    • <ItemName>Sky Serpents</> Glider
    • <ItemName>Cobra</> Back Bling
    • <ItemName>Flying Standard</> Contrail
    • 300 V-Bucks
    • 1 Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>20% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,000 V-Bucks</>
    • 6 Emotes
    • 5 Wraps
    • 3 Gliders
    • 3 Back Blings
    • 4 Harvesting Tools
    • 4 Contrails
    • 1 Pet
    • 12 Sprays
    • 2 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione 8, da ora fino all\'8 maggio
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 10.000 V-buck</>!
   • Costume progressivo <ItemName>Cuore nero</>
   • Costume progressivo <ItemName>Ibrido</>
   • Costume <ItemName>Sidewinder</>
   • Copertura <ItemName>Mimetica tropicale</>
   • Piccolo amico <ItemName>Woodsy</>
   • Deltaplano <ItemName>Serpenti dei cieli</>
   • Dorso decorativo <ItemName>Cobra</>
   • Scia <ItemName>Stendardo volante</>
   • 300 V-Buck
   • 1 brano musicale
   • <Bold>Bonus 70%</> Bonus PE partite stagionali
   • <Bold>Bonus 20%</> PE amici partite stagionali
   • <Bold>Sfide settimanali extra</>
   • e altro ancora!
  
  Gioca per aumentare il livello del tuo Pass battaglia, sbloccando <Bold>più di 75 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
   • <Bold>4 costumi in più</>
   • <Bold>1.000 V-Buck</>
   • 6 emote
   • 5 coperture
   • 3 deltaplani
   • 3 dorsi decorativi
   • 4 strumenti raccolta
   • 4 scie
   • 1 piccolo amico
   • 12 spray
   • 2 brani musicali
   • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison 8 : jusqu\'au 8 mai
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 10 000 V-bucks</>.
    • Tenue évolutive <ItemName>Cœur Noir</>
    • Tenue évolutive <ItemName>Hybride</>
    • Tenue <ItemName>Vipère</>
    • Revêtement <ItemName>Camouflage tropical</>
    • Le compagnon <ItemName>Tilleul</>
    • Planeur <ItemName>Serpents célestes</>
    • Accessoire de dos <ItemName>Cobra</>
    • Traînée de condensation <ItemName>Drapeau volant</>
    • 300 V-bucks
    • 1 piste musicale
    • Bonus d\'EXP de saison de <Bold>70%</>
    • Bonus d\'EXP de saison de <Bold>20%</> pour des amis
    • <Bold>Des défis hebdomadaires supplémentaires</>
    • Et plus !
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 75 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <Bold>4 autres tenues</>
    • <Bold>1000 V-bucks</>
    • 6 emotes
    • 5 revêtements
    • 3 planeurs
    • 3 accessoires de dos
    • 4 pioches
    • 4 traînées de condensation
    • 1 compagnon
    • 12 aérosols
    • 2 pistes musicales
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第八赛季：现在起至5月8日
  
  立即获得这些<Bold>价值逾10000V币</>的物品。
    • <ItemName>黑胡子</>可进化服装
    • <ItemName>忍者龙</>可进化服装
    • <ItemName>响尾蛇</>服装
    • <ItemName>热带迷彩</>皮肤
    • <ItemName>木雕汪</>宠物
    • <ItemName>空中飞蛇</>滑翔伞
    • <ItemName>眼镜蛇</>背部装饰
    • <ItemName>飞行挂旗</>滑翔轨迹
    • 300V币
    • 1个音轨
    • <Bold>70%额外</>赛季匹配经验
    • <Bold>20%额外</>赛季好友匹配经验
    • <Bold>额外每周挑战</>
    • 以及更多奖励！
  
  通过游玩提升英雄季卡战阶，解锁<Bold>至少75个奖励</>（通常需要75到150个小时的游玩时间）。
    • <Bold>4个额外服装</>
    • <Bold>1000V币</>
    • 6个姿势
    • 5个皮肤
    • 3个滑翔伞
    • 3个背部装饰
    • 4个镐
    • 4个滑翔轨迹
    • 1个宠物
    • 12个涂鸦
    • 2个音轨
    • 以及更多奖励！
  希望更快得到所有奖励吗？你可以随时使用V币购买战阶！',
              'es' => 'Temporada 8, desde ahora hasta el 8 de mayo
  
  Consigue instantáneamente estos objetos <Bold>valorados en más de 10 000 paVos</>.
    • Traje progresivo de <ItemName>Parchenegro</>
    • Traje progresivo de <ItemName>Híbrido</>
    • Traje de <ItemName>Áspid</>
    • Envoltorio <ItemName>Camuflaje tropical</>
    • Mascota <ItemName>Maderito</>
    • Ala delta<ItemName>Carroza de cascabel</>
    • Accesorio mochilero<ItemName>Cobra</>
    • Estela <ItemName>A toda vela</>
    • 300 paVos
    • 1 Tema musical
    • <Bold>Bonificación del 70 %</> de PE por partida de temporada
    • <Bold>Bonificación del 20 %</> de PE de partida con amigos de temporada
    • <Bold>Desafíos semanales adicionales</>
    • ¡y mucho más!
  
  Jugad para subir de nivel el pase de batalla, que desbloquea <Bold>más de 75 recompensas</> (suele dar para entre 75 y 150 horas de juego).
    • <Bold>4 trajes más</>
    • <Bold>1000 paVos</>
    • 6 gestos
    • 5 envoltorios
    • 3 alas delta
    • 3 accesorios mochileros
    • 4 herramientas de recolección
    • 4 estelas
    • 1 mascota
    • 12 grafitis
    • 2 temas musicales
    • ¡y mucho más!
  ¿Lo queréis más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season 8 Now thru May 8
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>Blackheart</> Progressive Outfit
    • <ItemName>Hybrid</> Progressive Outfit
    • <ItemName>Sidewinder</> Outfit
    • <ItemName>Tropical Camo</> Wrap
    • <ItemName>Woodsy</> Pet
    • <ItemName>Sky Serpents</> Glider
    • <ItemName>Cobra</> Back Bling
    • <ItemName>Flying Standard</> Contrail
    • 300 V-Bucks
    • 1 Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>20% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,000 V-Bucks</>
    • 6 Emotes
    • 5 Wraps
    • 3 Gliders
    • 3 Back Blings
    • 4 Harvesting Tools
    • 4 Contrails
    • 1 Pet
    • 12 Sprays
    • 2 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズン8: 5月8日まで
  
  <Bold>10,000 V-Bucks以上の価値</>があるアイテムを今すぐ手に入れましょう。
    • プログレッシブコスチューム<ItemName>「ブラックハート」</>
    • プログレッシブコスチューム<ItemName>「ハイブリッド」</>
    • コスチューム<ItemName>「サイドワインダー」</>
    • ラップ<ItemName>「トロピカルカモ」</>
    • ペット<ItemName>「ウッドゥジー」</>
    • グライダー<ItemName>「スカイサーペント」</>
    • バックアクセサリー<ItemName>「コブラ」</>
    • コントレイル<ItemName>「フライングスタンダード」</>
    • 300 V-Bucks
    • ミュージックx1
    • シーズンマッチXPの<Bold>70%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>20%ボーナス</>
    • <Bold>追加のウィークリーチャレンジ</>
    • 他にも盛りだくさん！
  
  プレイしてバトルパスのレベルを上げると、<Bold>75個以上の報酬</>をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。
    • <Bold>コスチュームx4以上</>
    • <Bold>1,000 V-Bucks</>
    • エモートx6
    • ラップx5
    • グライダーx3
    • バックアクセサリーx3
    • 収集ツールx4
    • コントレイルx4
    • ペットx1
    • スプレーx12
    • ミュージックトラックx2
    • 他にも盛りだくさん！
  もっと早く報酬を全部集めたいという方は、V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Sezon 8: od teraz do 8 maja
  
  Otrzymasz od razu poniższe przedmioty <Bold>o wartości ponad 10 000 V-dolców</>:
    • Strój progresywny: <ItemName>Czarnosercy</>
    • Strój progresywny: <ItemName>Hybryda</>
    • Strój progresywny: <ItemName>Grzechotnica</>
    • Malowanie: <ItemName>Tropikalny kamuflaż</>
    • Pupil: <ItemName>Drewniak</>
    • Lotnia: <ItemName>Podniebne Węże</>
    • Plecak: <ItemName>Kobra</>
    • Smuga: <ItemName>Powiewający Sztandar</>
    • 300 V-dolców  • 1 tło muzyczne
    • Sezonowa <Bold>premia +70% PD za grę</>
    • Sezonowa <Bold>premia +20% PD za grę ze znajomymi</>
    • Dostęp do <Bold>dodatkowych wyzwań tygodnia</>
    • I nie tylko!
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 75 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godz. gry).
    • <Bold>4 kolejne stroje</>
    • <Bold>1000 V-dolców</>
    • 6 emotek
    • 5 malowań
    • 3 lotnie
    • 3 plecaki
    • 4 zbieraki
    • 4 smugi
    • 1 pupil
    • 12 graffiti
    • 2 tła muzyczne
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Temporada 8: ahora hasta el 8 de mayo
  
  Obtén al instante estos objetos <Bold>que cuestan más de 10 000 monedas V</>.
    • Atuendo progresivo <ItemName>Parche Negro</>
    • Atuendo progresivo <ItemName>Híbrido</>
    • Atuendo <ItemName>Cascabel</>
    • Papel <ItemName>Camuflaje tropical</>
    • Mascota <ItemName>Maderín</>
    • Planeador <ItemName>Serpientes del cielo</>
    • Mochila retro <ItemName>Cobra</> 
    • Estela <ItemName>Viento en popa</>
    • 300 monedas V
    • 1 pista de música
    • <Bold>70 % de bonificación</> de PE para partidas en la temporada
    • <Bold>20 % de bonificación</> de PE para partidas con amigos en la temporada
    • <Bold>Desafíos semanales adicionales</>
    • ¡Y mucho más!
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 75 recompensas</> (esto lleva entre 75 y 150 horas de juego).
    • <Bold>4 atuendos más</>
    • <Bold>1000 monedas V</>
    • 6 gestos
    • 5 papeles
    • 3 planeadores
    • 3 mochilas retro
    • 4 herramientas de recolección
    • 4 estelas
    • 1 mascota
    • 12 aerosoles
    • 2 pistas de música
    • ¡Y mucho más!
  ¿Lo quieres todo más rápido? ¡Puedes usar las monedas V para comprar niveles cuando quieras!',
              'tr' => '8. Sezon: Şu andan 8 Mayıs’a kadar
  
  <Bold>10.000 V-Papel’in üzerinde değeri olan</> bu içerikleri hemen kap.
    • İlerlemeli <ItemName>Karasakal</> Kıyafeti
    • İlerlemeli <ItemName>Melez</> Kıyafeti
    • <ItemName>Engerek</> Kıyafeti
    • <ItemName>Tropik Kamuflaj</> Kaplaması
    • Sadık Dost <ItemName>Gofret</>
    • <ItemName>Yılanör</> Planörü
    • <ItemName>Kobra</> Sırt Süsü
    • <ItemName>Kara Bayrak</> Dalış İzi
    • 300 V-Papel
    • 1 Müzik Parçası
    • <Bold>%70 Bonus</> Sezonluk Maç TP’si
    • Arkadaşların için <Bold>%20 Bonus</> Sezonluk Maç TP’si
    • <Bold>İlave Haftalık Görevler</>
    • ve çok daha fazlası!
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve <Bold>75’ten fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <Bold>4 Kıyafet daha</>
    • <Bold>1.000 V-Papel</>
    • 6 İfade
    • 5 Kaplama
    • 3 Planör
    • 3 Sırt Süsü
    •  4 Toplama Aleti
    • 4 Dalış İzi
    • 1 Sadık Dost
    • 12 Sprey
    • 2 Müzik Parçası
    • ve çok daha fazlası!
  Hepsini daha hızlı almak mı istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season8_BattlePassWithLevels.DA_BR_Season8_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => 'E07E41D52D4A425F8DC6592496B75301',
            'devName' => 'BR.Season8.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle Pass-Stufe',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 티어',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Categoria de Passe de Batalha',
              'en' => 'Battle Pass Tier',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Palier du Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Nivel del pase de batalla',
              'ar' => 'Battle Pass Tier',
              'ja' => 'バトルパスティア',
              'pl' => 'Stopień karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 얻어보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => 'ステキな報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödüllerin sahibi ol!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => '77F31B7F83FB422195DA60CDE683671D',
            'devName' => 'BR.Season8.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '9DF02EA14FB15E475EBBEBBFDBB988DB',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison 8',
              'ru' => 'Сезон 8',
              'ko' => '시즌 8',
              'zh-hant' => '第8賽季',
              'pt-br' => 'Temporada 8',
              'en' => 'Season 8',
              'it' => 'Stagione 8',
              'fr' => 'Saison 8',
              'zh-cn' => '第8赛季',
              'es' => 'Temporada 8',
              'ar' => 'Season 8',
              'ja' => 'シーズン8',
              'pl' => 'Sezon 8',
              'es-419' => 'Temporada 8',
              'tr' => '8. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison 8 – Ab sofort bis einschließlich 8. Mai
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 3.500 V-Bucks</>.
    • <ItemName>Schwarzherz</> (aufrüstbares Outfit)
    • <ItemName>Hybrid</> (aufrüstbares Outfit)
    • <Bold>+50 %</> Saison-Match-EP
    • <Bold>+10 %</> Saison-Match-EP für Freunde
    • <Bold>zusätzliche wöchentliche Herausforderungen</>
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 100 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <ItemName>Klapperschlange</> und <Bold>4 weitere Outfits</>
    • <Bold>1.300 V-Bucks</>
    • 7 Emotes
    • 6 Lackierungen
    • 2 Gefährten
    • 5 Erntewerkzeuge
    • 4 Hängegleiter
    • 4 Rücken-Accessoires
    • 5 Kondensstreifen
    • 14 Spraymotive
    • 3 Musikstücke
    • 1 Spielzeug
    • 20 Ladebildschirme
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Восьмой сезон: до 8 мая 
  
  Сразу же получите предметы <Bold>стоимостью более 3500 В-баксов!</>
    • Улучшающаяся экипировка <ItemName>Флибустьера</>;
    • улучшающаяся экипировка <ItemName>Гибрида</>;
    • <Bold>+50% к опыту</> за матчи сезона;
    • <Bold>+10% к опыту</> друзей за матчи сезона;
    • <Bold>дополнительные еженедельные испытания</>.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут <Bold>более 100 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • экипировка <ItemName>Горгоны</> и <Bold>ещё 4 костюма;</>
    • <Bold>1300 В-баксов;</>
    • 7 эмоций;
    • 6 обёрток;
    • 2 питомца;
    • 5 инструментов;
    • 4 дельтаплана;
    • 4 украшения на спину;
    • 5 воздушных следов;
    • 14 граффити;
    • 3 музыкальные композиции;
    • 1 игрушка;
    • 20 экранов загрузки
    и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 8: 5월 8일 종료
  
  <Bold>3,500 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>블랙하트</> 진화형 의상
    • <ItemName>하이브리드</> 진화형 의상
    • <Bold>50% 보너스</> 시즌 매치 XP
    • <Bold>10% 보너스</> 시즌 친구 매치 XP
    • <Bold>추가 주간 도전</>
  
  게임을 플레이하고 배틀패스 티어를 올려서 <Bold>100개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <ItemName>사이드와인더</> 외 <Bold>의상 4개</>
    • <Bold>1,300 V-Bucks</>
    • 이모트 7개
    • 외관 6개
    • 애완동물 2마리
    • 수확 도구 5개
    • 글라이더 4개
    • 등 장신구 4개
    • 트레일 5개
    • 스프레이 14개
    • 음악 트랙 3개
    • 장난감 1개
    • 로딩 화면 20개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第八賽季：現在起至5月8日
  
  立即獲得這些<Bold>價值逾3500V幣</>的物品。
    • <ItemName>黑鬍子</>可進化服裝
    • <ItemName>忍者龍</>可進化服裝
    • <Bold>50%額外</>賽季匹配經驗
    • <Bold>10%額外</>賽季好友匹配經驗
    • <Bold>額外每週挑戰</>
  
  通過遊玩提升英雄季卡戰階，解鎖<Bold>百餘獎勵</>（通常需要75到150個小時的遊玩時間）。
    • <ItemName>響尾蛇</>和<Bold>4個額外服裝</>
    • <Bold>1300V幣</>
    • 7個姿勢
    • 6個皮膚
    • 2個寵物
    • 5個鎬
    • 4個滑翔傘
    • 4個背部裝飾
    • 5個滑翔軌跡
    • 14個塗鴉
    • 3個音軌
    • 1個玩具
    • 20張載入介面
    • 以及更多獎勵！
  希望更快得到所有獎勵嗎？你可以隨時使用V幣購買戰階！',
              'pt-br' => 'Temporada 8: de hoje até 8 de maio 
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 3.500 V-Bucks</>.
    • Traje Progressivo <ItemName>Coração Negro</>
    • Traje Progressivo <ItemName>Híbrido</>
    • <Bold>50% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>10% de Bônus</> de EXP da Temporada em Partidas com Amigos
    • <Bold>Desafios Semanais Extras</>
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 100 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <ItemName>Cascavel</> e <Bold>mais 4 Trajes</>
    • <Bold>1.300 V-Bucks</>
    • 7 Gestos
    • 6 Envelopamentos
    • 2 Mascotes
    • 5 Ferramentas de Coleta
    • 4 Asas-deltas
    • 4 Acessórios para as Costas
    • 5 Rastros de Fumaça
    • 14 Sprays
    • 3 Faixas Musicais
    • 1 Brinquedo
    • 20 Telas de Carregamento
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season 8 Now thru May 8 
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>Blackheart</> Progressive Outfit
    • <ItemName>Hybrid</> Progressive Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>10% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Sidewinder</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 7 Emotes
    • 6 Wraps
    • 2 Pets
    • 5 Harvesting Tools
    • 4 Gliders
    • 4 Back Blings
    • 5 Contrails
    • 14 Sprays
    • 3 Music Tracks
    • 1 Toy
    • 20 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione 8, da ora fino all\'8 maggio
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 3.500 V-buck</>!
   • Costume progressivo <ItemName>Cuore nero</>
   • Costume progressivo <ItemName>Ibrido</>
   • <Bold>Bonus del 50%</> dei PE partite stagionali
   • <Bold>Bonus del 10%</> dei PE partite amico stagionali
   • <Bold>Sfide settimanali extra</>
  
  Gioca per aumentare il livello del tuo Pass battaglia, sbloccando <Bold>più di 100 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
   • <ItemName>Sidewinder</> e <Bold>altri 4 costumi</>
   • <Bold>1.300 V-buck</>
   • 7 emote
   • 6 coperture
   • 2 piccoli amici
   • 5 strumenti raccolta
   • 4 deltaplani
   • 4 dorsi decorativi
   • 5 scie
   • 14 spray
   • 3 brani musicali
   • 1 giocattolo
   • 20 schermate di caricamento
   • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison 8 : jusqu\'au 8 mai
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 3500 V-bucks</>.
    • Tenue évolutive <ItemName>Cœur Noir</>
    • Tenue évolutive <ItemName>Hybride</>
    • Bonus d\'EXP de saison de <Bold>50%</>
    • Bonus d\'EXP de saison de <Bold>10%</> pour des amis
    • <Bold>Des défis hebdomadaires supplémentaires</>
  
   Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 100 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <ItemName>Vipère</> plus <Bold>4 autres tenues</>
    • <Bold>1300 V-bucks</>
    • 7 emotes
    • 6 revêtements
    • 2 compagnons
    • 5 pioches
    • 4 planeurs
    • 4 accessoires de dos
    • 5 traînées de condensation
    • 14 aérosols
    • 3 pistes musicales
    • 1 jouet
    • 20 écrans de chargement
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第八赛季：现在起至5月8日
  
  立即获得这些<Bold>价值逾3500V币</>的物品。
    • <ItemName>黑胡子</>可进化服装
    • <ItemName>忍者龙</>可进化服装
    • <Bold>50%额外</>赛季匹配经验
    • <Bold>10%额外</>赛季好友匹配经验
    • <Bold>额外每周挑战</>
  
  通过游玩提升英雄季卡战阶，解锁<Bold>百余奖励</>（通常需要75到150个小时的游玩时间）。
    • <ItemName>响尾蛇</>和<Bold>4个额外服装</>
    • <Bold>1300V币</>
    • 7个姿势
    • 6个皮肤
    • 2个宠物
    • 5个镐
    • 4个滑翔伞
    • 4个背部装饰
    • 5个滑翔轨迹
    • 14个涂鸦
    • 3个音轨
    • 1个玩具
    • 20张载入界面
    • 以及更多奖励！
  希望更快得到所有奖励吗？你可以随时使用V币购买战阶！',
              'es' => 'Desde ahora hasta el 8 de mayo 
  
  Consigue instantáneamente estos objetos<Bold> valorados en más de 3.500 paVos</>.
    • Traje progresivo de <ItemName>Parchenegro</>
    • Traje progresivo de<ItemName>Híbrido</>
    • <Bold>Bonificación del 50 %</> de PE por partida de temporada
    • <Bold>Bonificación del 10 %</> de PE de partida amistosa de temporada
    • <Bold>Desafíos semanales adicionales</>
  
  Jugad para subir de nivel el pase de batalla, que desbloquea más de <Bold>100 recompensas</> (suele dar para entre 75 y 150 horas de juego).
    • <ItemName>Áspid</> y <Bold>4 trajes más</>
    • <Bold>1300 paVos</>
    • 7 gestos
    • 6 envoltorios
    • 2 mascotas
    • 5 herramientas de recolección
    • 4 alas delta
    • 4 accesorios mochileros
    • 5 estelas
    • 14 grafitis
    • 3 temas musicales
    • 1 juguete
    • 20 pantallas de carga
    • ¡y mucho más!
  ¿Lo queréis más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season 8 Now thru May 8 
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>Blackheart</> Progressive Outfit
    • <ItemName>Hybrid</> Progressive Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>10% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Sidewinder</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 7 Emotes
    • 6 Wraps
    • 2 Pets
    • 5 Harvesting Tools
    • 4 Gliders
    • 4 Back Blings
    • 5 Contrails
    • 14 Sprays
    • 3 Music Tracks
    • 1 Toy
    • 20 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズン8: 5月8日まで
  
  <Bold>3,500 V-Bucks以上の価値</>があるアイテムを今すぐ手に入れましょう。
    • プログレッシブコスチューム<ItemName>「ブラックハート」</>
    • プログレッシブコスチューム<ItemName>「ハイブリッド」</>
    • シーズンマッチXPの<Bold>50%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>10%ボーナス</>
    • <Bold>追加のウィークリーチャレンジ</>
  
  プレイしてバトルパスのレベルを上げると、<Bold>100以上の報酬</>をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。
    • <ItemName>「サイドワインダー」</>及びコスチューム<Bold>x4以上</>
    • <Bold>1,300 V-Bucks</>
    • エモートx7
    • ラップx6
    • ペットx2
    • 収集ツールx5
    • グライダーx4
    • バックアクセサリーx4
    • コントレイルx5
    • スプレーx14
    • ミュージックトラックx3
    • おもちゃx1
    • ロード画面x20
   • 他にも盛りだくさん！
  もっと早く報酬を全部集めたいという方は、V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Sezon 8: od teraz do 8 maja
  
  Otrzymasz od razu poniższe przedmioty <Bold>o wartości ponad 3500 V-dolców</>:
    • Strój progresywny: <ItemName>Czarnosercy</>
    • Strój progresywny: <ItemName>Hybryda</>
    • Sezonowa <Bold>premia +50% PD za grę</>
    • Sezonowa <Bold>premia +10% PD za grę ze znajomymi</>
    • Dostęp do <Bold>dodatkowych wyzwań tygodnia</>
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 100 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godz. gry).
    • <ItemName>Grzechotnica</> i <Bold>4 inne stroje</>
    • <Bold>1300 V-dolców</>
    • 7 emotek
    • 6 malowań
    • 2 pupile
    • 5 zbieraków
    • 4 lotnie
    • 4 plecaki
    • 5 smug
    • 14 graffiti
    • 3 tła muzyczne
    • 1 zabawka
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Temporada 8: ahora hasta el 8 de mayo
  
  Obtén al instante estos objetos <Bold>que cuestan más de 3500 monedas V</>.
    • Atuendo progresivo <ItemName>Parche Negro</>
    • Atuendo progresivo <ItemName>Híbrido</>
    • <Bold>50 % de bonificación</> de PE para partidas en la temporada
    • <Bold>10 % de bonificación</> de PE para partidas con amigos en la temporada
    • <Bold>Desafíos semanales adicionales</>
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 100 recompensas</> (esto lleva entre 75 y 150 horas de juego).
    • <ItemName>Cascabel</> y <Bold>4 atuendos más</>
    • <Bold>1300 monedas V</>
    • 7 gestos
    • 6 papeles
    • 2 mascotas
    • 5 herramientas de recolección
    • 4 planeadores
    • 4 mochilas retro
    • 5 estelas
    • 14 aerosoles
    • 3 pistas de música
    • 1 juguete
    • 20 pantallas de carga
    • ¡Y mucho más!
  ¿Lo quieres todo más rápido? ¡Puedes usar las monedas V para comprar niveles cuando quieras!',
              'tr' => '8. Sezon: Şu andan 8 Mayıs’a kadar 
  
  <Bold>3.500 V-Papel’in üzerinde değeri olan</> bu içerikleri hemen kap.
    • İlerlemeli <ItemName>Karasakal</> Kıyafeti
    • İlerlemeli <ItemName>Melez</> Kıyafeti
    • <Bold>%50 Bonus</> Sezonluk Maç TP’si
    • Arkadaşların için <Bold>%10 Bonus</> Sezonluk Maç TP’si
    • <Bold>İlave Haftalık Görevler</>
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve <Bold>100’den fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <ItemName>Engerek</> ve <Bold>4 Kıyafet</> daha
    • <Bold>1.300 V-Papel</>
    • 7 İfade
    • 6 Kaplama
    • 2 Sadık Dost
    • 5 Toplama Aleti
    • 4 Planör
    • 4 Sırt Süsü
    • 5 Dalış İzi
    • 14 Sprey
    • 3 Müzik Parçası
    • 1 Oyuncak
    • 20 Yükleme Ekranı
    • ve çok daha fazlası!
  Hepsini daha hızlı mı almak istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season8_BattlePass.DA_BR_Season8_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      15 => 
      array (
        'name' => 'BRSeason9',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => 'C7190ACA4E5E228A94CA3CB9C3FC7AE9',
            'devName' => 'BR.Season9.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '73E6EE6F4526EF97450D1592C3DB0EF5',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Bundle battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle Pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle Pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison 9 – Ab sofort bis einschließlich 1. August.
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 10.000 V-Bucks</>.
    • <ItemName>Rox</> (aufrüstbares Outfit)
    • <ItemName>Hüter</> (Outfit)
    • <ItemName>Bunker-Jonesy</> (Outfit)
    • <ItemName>Hüter</> (Lackierung)
    • <ItemName>Reife Ripper</> (Erntewerkzeug)
    • <ItemName>Turbodrall</> (Hängegleiter)
    • <ItemName>Reifeprüfung</> (Lackierung)
    • 300 V-Bucks
    • 1 Musikstück
    • <Bold>+70 %</> Saison-Match-EP
    • <Bold>+20 %</> Saison-Match-EP für Freunde
    • <Bold>zusätzliche wöchentliche Herausforderungen</>
    • und noch mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 75 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <Bold>4 weitere Outfits</>
    • <Bold>1.000 V-Bucks</>
    • 6 Emotes
    • 4 Lackierungen
    • 2 Hängegleiter
    • 6 Rücken-Accessoires
    • 6 Erntewerkzeuge
    • 4 Kondensstreifen
    • 1 Gefährte
    • 2 Musikstücke
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Девятый сезон: до 1 августа
  
  Сразу же получите предметы <Bold>стоимостью более 10 000 В-баксов!</>
    • Улучшающаяся экипировка <ItemName>Рокси</>;
    • экипировка <ItemName>Стража</>;
    • экипировка <ItemName>Затворника Джоунси</>;
    • обёртка <ItemName>«Страж»</>;
    • кирка <ItemName>«Самодельный топорик»</>;
    • дельтаплан <ItemName>«Футуризм»</>;
    • обёртка <ItemName>«Банановая кожура»</>;
    • 300 В-баксов;
    • 1 музыкальная композиция;
    • <Bold>+70% к опыту</> за матчи сезона;
    • <Bold>+20% к опыту</> друзей за матчи сезона;
    • <Bold>дополнительные еженедельные испытания</>
   и многое другое.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут <Bold>более 75 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • <Bold>ещё 4 костюма;</>
    • <Bold>1000 В-баксов</>;
    • 6 эмоций;
    • 4 обёртки;
    • 2 дельтаплана;
    • 6 украшений на спину;
    • 6 инструментов;
    • 4 воздушных следа;
    • 1 питомец;
    • 2 музыкальные композиции
      и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 9: 8월 1일 종료
  
  <Bold>10,000 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>록스</> 진화형 의상
    • <ItemName>센티널</> 진화형 의상
    • <ItemName>벙커 존시</> 의상
    • <ItemName>센티널</> 외관
    • <ItemName>바나나 껍질 도끼</> 수확 도구
    • <ItemName>터보 스핀</> 글라이더
    • <ItemName>바나나 껍질</> 외관
    • 300 V-Bucks
    • 음악 트랙 1개
    • <Bold>70% 보너스</> 시즌 매치 XP
    • <Bold>20% 보너스</> 시즌 친구 매치 XP
    • <Bold>추가 주간 도전</>
    • 그 외 더 많은 혜택!
  
  게임을 플레이하고 배틀패스 티어를 올려서 <Bold>75개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <Bold>추가 의상 4개</>
    • <Bold>1,000 V-Bucks</>
    • 이모트 6개
    • 외관 4개
    • 글라이더 2개
    • 등 장신구 6개
    • 수확 도구 6개
    • 트레일 4개
    • 애완동물 1마리
    • 음악 트랙 2개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第九賽季：現在起至8月1日
  
  立即獲得這些<Bold>價值逾10000V幣</>的物品。
    • <ItemName>草莓飛行員</>可進化服裝
    • <ItemName>裝甲雄雞</>服裝
    • <ItemName>地堡鐘斯</>服裝
    • <ItemName>裝甲雄雞</>皮膚
    • <ItemName>老練撕裂者</>採集工具
    • <ItemName>加速旋轉</>滑翔傘
    • <ItemName>老練</>皮膚
    • 300V幣
    • 1個音軌
    • <Bold>70%額外</>賽季匹配經驗
    • <Bold>20%額外</>賽季好友匹配經驗
    • <Bold>額外每週挑戰</>
    • 以及更多獎勵！
  
  通過遊玩提升英雄季卡戰階，解鎖<Bold>超過75個獎勵</>（通常需要75到150個小時的遊玩時間）。
    • <Bold>4個額外服裝</>
    • <Bold>1000V幣</>
    • 6個姿勢
    • 4個皮膚
    • 2個滑翔傘
    • 6個背部裝飾
    • 6個採集工具
    • 4個滑翔軌跡
    • 1個寵物
    • 12個塗鴉
    • 2個音軌
    • 以及更多獎勵！
  希望更快得到所有獎勵嗎？你可以隨時使用V幣購買戰階！',
              'pt-br' => 'Temporada 9: de hoje até 1.º de agosto
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 10.000 V-Bucks</>.
    • Traje Progressivo <ItemName>Rox</>
    • Traje Progressivo <ItemName>Sentinela</>
    • Traje <ItemName>Jonesy — Bunker</>
    • Envelopamento <ItemName>Sentinela</>
    • Ferramenta de Coleta <ItemName>Mutiladores Maduros</>
    • Asa-delta <ItemName>Voadora Turbinada</>
    • Envelopamento <ItemName>Maduro</>
    • 300 V-Bucks
    • 1 Faixa Musical
    • <Bold>70% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>20% de Bônus</> de EXP da Temporada em Partidas com Amigos
    • <Bold>Desafios Semanais Extras</>
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 75 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <Bold>Mais 4 Trajes</>
    • <Bold>1.000 V-Bucks</>
    • 6 Gestos
    • 4 Envelopamentos
    • 2 Asas-deltas
    • 6 Acessórios para as Costas
    • 6 Ferramentas de Coleta
    • 4 Rastros de Fumaça
    • 1 Mascote
    • 2 Faixas Musicais
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season 9 Now through August 1.
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>Rox</> Progressive Outfit
    • <ItemName>Sentinel</> Outfit
    • <ItemName>Bunker Jonesy</> Outfit
    • <ItemName>Sentinel</> Wrap
    • <ItemName>Ripe Rippers</> Harvesting Tool
    • <ItemName>Turbo Spin</> Glider
    • <ItemName>Ripe</> Wrap
    • 300 V-Bucks
    • 1 Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>20% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,000 V-Bucks</>
    • 6 Emotes
    • 4 Wraps
    • 2 Gliders
    • 6 Back Blings
    • 6 Harvesting Tools
    • 4 Contrails
    • 1 Pet
    • 2 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione 9, da ora fino al 1° agosto
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 10.000 V-buck</>!
   • Costume progressivo <ItemName>Rox</>
   • Costume progressivo <ItemName>Sentinella</>
   • Costume <ItemName>Jonesy Bunker</>
   • Copertura <ItemName>Sentinella</>
    • Strumento raccolta <ItemName>Fauci feroci</>
   • Deltaplano <ItemName>Rotazione turbo</>
    • Copertura <ItemName>Maturo</>
    • 300 V-buck
    • 1 brano musicale
   • <Bold>Bonus 70%</> PE partite stagionali
   • <Bold>Bonus 20%</> PE amici partite stagionali
   • <Bold>Sfide settimanali extra</>
   • e altro ancora!
  
  Gioca per aumentare il livello del tuo Pass battaglia, sbloccando <Bold>più di 75 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
   • <Bold>4 costumi in più</>
   • <Bold>1000 V-Buck</>
   • 6 emote
   • 4 coperture
   • 2 deltaplani
   • 6 dorsi decorativi
   • 6 strumenti raccolta
   • 4 scie
   • 1 piccolo amico
   • 2 brani musicali
   • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison 9 : jusqu\'au 1er août
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 10 000 V-bucks</>.
    • Tenue évolutive <ItemName>Rox</>
    • Tenue <ItemName>Sentinelle</>
    • Tenue <ItemName>Jonesy du bunker</>
    • Revêtement <ItemName>Sentinelle</>
    • Outil de collecte <ItemName>Haches mûres</>
    • Planeur <ItemName>Aile turbo</>
    • Revêtement <ItemName>Mûr</>
    • 300 V-bucks
    • 1 piste musicale
    • Bonus d\'EXP de saison de 70%
    • Bonus d\'EXP de saison de 20% pour des amis
    • <Bold>Des défis hebdomadaires supplémentaires</>
    • Et plus !
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 75 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <Bold>4 autres tenues</>
    • <Bold>1000 V-bucks</>
    • 6 emotes
    • 4 revêtements
    • 2 planeurs
    • 6 accessoires de dos
    • 6 outils de collecte
    • 4 traînées de condensation
    • 1 compagnon
    • 2 pistes musicales
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第九赛季：现在起至8月1日
  
  立即获得这些<Bold>价值逾10000V币</>的物品。
    • <ItemName>草莓飞行员</>可进化服装
    • <ItemName>装甲雄鸡</>服装
    • <ItemName>地堡琼斯</>服装
    • <ItemName>装甲雄鸡</>皮肤
    • <ItemName>蕉战斧</>采集工具
    • <ItemName>动力尾旋</>滑翔伞
    • <ItemName>香蕉皮</>皮肤
    • 300V币
    • 1个音轨
    • <Bold>70%额外</>赛季匹配经验
    • <Bold>20%额外</>赛季好友匹配经验
    • <Bold>额外每周挑战</>
    • 以及更多奖励！
  
  通过游玩提升英雄季卡战阶，解锁<Bold>超过75个奖励</>（通常需要75到150个小时的游玩时间）。
    • <Bold>4个额外服装</>
    • <Bold>1000V币</>
    • 6个姿势
    • 4个皮肤
    • 2个滑翔伞
    • 6个背部装饰
    • 6个采集工具
    • 4个滑翔轨迹
    • 1个宠物
    • 12个涂鸦
    • 2个音轨
    • 以及更多奖励！
  希望更快得到所有奖励吗？你可以随时使用V币购买战阶！',
              'es' => 'Temporada 9: desde ahora hasta el 1 de agosto.
  
  Consigue instantáneamente estos objetos <Bold>valorados en más de 10 000 paVos</>.
    • Traje progresivo de <ItemName>Rox</>
    • Traje de <ItemName>Centinela</>
    • Traje de <ItemName>Jonesy del búnker</>
    • Envoltorio <ItemName>Centinela</>
    • Herramienta de recolección <ItemName>Machete maduro</>
    • Ala delta <ItemName>Turbogiro</>
    • Envoltorio <ItemName>Maduro</>
    • 300 paVos
    • 1 tema musical
    • <Bold>Bonificación del 70 %</> de PE por partida de temporada
    • <Bold>Bonificación del 20 %</> de PE de partida amistosa de temporada
    • <Bold>Desafíos semanales adicionales</>
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquea <Bold>más de 75 recompensas</> (suele llevar entre 75 y 150 horas de juego).
    • <Bold>4 trajes más</>
    • <Bold>1000 paVos</>
    • 6 gestos
    • 4 envoltorios
    • 2 alas delta
    • 6 accesorios mochileros
    • 6 herramientas de recolección
    • 4 estelas
    • 1 mascota
    • 2 temas musicales
    • ¡Y muchísimo más!
  ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season 9 Now through August 1.
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>Rox</> Progressive Outfit
    • <ItemName>Sentinel</> Outfit
    • <ItemName>Bunker Jonesy</> Outfit
    • <ItemName>Sentinel</> Wrap
    • <ItemName>Ripe Rippers</> Harvesting Tool
    • <ItemName>Turbo Spin</> Glider
    • <ItemName>Ripe</> Wrap
    • 300 V-Bucks
    • 1 Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>20% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,000 V-Bucks</>
    • 6 Emotes
    • 4 Wraps
    • 2 Gliders
    • 6 Back Blings
    • 6 Harvesting Tools
    • 4 Contrails
    • 1 Pet
    • 2 Music Tracks
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズン9: 8月1日まで
  
  <Bold>10,000 V-Bucks以上の価値がある</>アイテムを今すぐ手に入れましょう。
  • <ItemName>ロックス</>プログレッシブコスチューム
    • <ItemName>センチネル</>コスチューム
    • <ItemName>バンカージョンジー</>コスチューム
    • <ItemName>センチネル</>ラップ
    • 「<ItemName>ライプリッパーズ</>」収集ツール
    • 「<ItemName>ターボスピン</>」グライダー
    • 「<ItemName>バナナ</>」 ラップ
    • 300 V-Bucks
    • ミュージックトラックx1
    • シーズンマッチXPの<Bold>70%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>20%ボーナス</>
    • <Bold>追加のウィークリーチャレンジ</>
    • 他にも色々！
  
  プレイしてバトルパスのレベルを上げると、<Bold>75以上の報酬</>をアンロックできます（通常、プレイにかかる時間は75～150時間程度)。
    • <Bold>追加のコスチュームx4</>
    • <Bold>1,000 V-Bucks</>
    • エモートx6
    • ラップx4
    •  グライダーx2
    • バックアクセサリーx6
    • 収集ツールx6
    • コントレイルx4
    • ペットx1
    • ミュージックトラックx2
    • 他にも色々！
  もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Sezon 9: od teraz do 1 sierpnia.
  
  Zgarnij od razu poniższe przedmioty <Bold>o wartości ponad 10 000 V-dolców</>:
    • Strój progresywny: <ItemName>Roxi</>
    • Strój progresywny: <ItemName>K0gut</>
    • Strój: <ItemName>Jonesy z Bunkra</>
    • Strój: <ItemName>K0gut</>
   • Malowanie: <ItemName>K0gut</>
    • Zbierak: <ItemName>Dojrzały Rozpruwacz</>
    • Lotnia: <ItemName>Turboskrętka</>
    • Malowanie: <ItemName>Dojrzałe</>
    • 300 V-dolców  • 1 tło muzyczne
    • Sezonowa <Bold>premia +70% PD za grę</>
    • Sezonowa <Bold>premia +20% PD za grę ze znajomymi</>
    • Dostęp do <Bold>dodatkowych wyzwań tygodnia</>
    • I nie tylko!
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 75 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godz. gry).
    • <Bold>4 kolejne stroje</>
    • <Bold>1000 V-dolców</>
    • 6 emotek
    • 4 malowania
    • 2 lotnie
    • 6 plecaków
    • 6 zbieraków
    • 4 smugi
    • 1 pupil
   • 2 tła muzyczne
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Temporada 9: ahora y hasta el 1 de agosto.
  
  Obtén al instante estos objetos que <Bold>cuestan más de 10 000 monedas V.</>.
    • Atuendo progresivo <ItemName>Rox</>
    • Atuendo Centinela</>
    • Atuendo <ItemName>Jonesy del búnker</>
    • Papel <ItemName>Centinela</>
    • Herramienta de recolección <ItemName>Destripamaduros</>
    • Planeador<ItemName>Vuelta turbo</>
    • Papel <ItemName>Maduro</>
    • 300 monedas V
    • 1 pista de música
    • <Bold>70 % de bonificación</> de PE para partidas de la temporada
    • <Bold>20 % de bonificación</> de PE para partidas con amigos en la temporada
    • <Bold>Desafíos semanales adicionales</>
    • ¡Y mucho más!
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 75 recompensas</> (esto lleva entre 75 y 100 horas de juego).
    • <Bold>4 atuendos más</>
    • <Bold>1000 monedas V</>
    • 6 gestos
    • 4 papeles
    • 2 planeadores
    • 6 mochilas retro
    • 6 herramientas de recolección
    • 4 estelas
    • 1 mascota
    • 2 pistas de música
    • ¡Y muchísimo más!
  ¿Quieres todo más rápido? ¡Usa las monedas V para comprar niveles cuando quieras!',
              'tr' => '9. Sezon: Şu andan 1 Ağustos’a kadar
  
  <Bold>10.000 V-Papel’in üzerinde değeri olan</> bu içerikleri hemen kap.
    • İlerlemeli <ItemName>Pembeli Savaşçı</> Kıyafeti
    • <ItemName>Savaş Kuşu</> Kıyafeti
    • <ItemName>Sığınak Kaçkını Jonesy</> Kıyafeti
    • <ItemName>Savaş Kuşu</> Kaplaması
    • <ItemName>Kabuktan Kazma</> Toplama Aleti
    • <ItemName>Pembe Kanat</> Planörü
    • <ItemName>Olgunlaşmış</> Kaplaması
    • 300 V-Papel
    • 1 Müzik Parçası
    • <Bold>%70 Bonus</> Sezonluk Maç TP’si
    • Arkadaşların için <Bold>%20 Bonus</> Sezonluk Maç TP’si
    • <Bold>İlave Haftalık Görevler</>
    • ve çok daha fazlası!
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve <Bold>75’ten fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <Bold>4 Kıyafet daha</>
    • <Bold>1.000 V-Papel</>
    • 6 İfade
    • 4 Kaplama
    • 2 Planör
    • 6 Sırt Süsü
    •  6 Toplama Aleti
    • 4 Dalış İzi
    • 1 Sadık Dost
    • 2 Müzik Parçası
    • ve çok daha fazlası!
  Hepsini daha hızlı almak mı istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season9_BattlePassWithLevels.DA_BR_Season9_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => '73E6EE6F4526EF97450D1592C3DB0EF5',
            'devName' => 'BR.Season9.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '73E6EE6F4526EF97450D1592C3DB0EF5',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison 9',
              'ru' => 'Девятый сезон',
              'ko' => '시즌 9',
              'zh-hant' => '第九賽季',
              'pt-br' => 'Temporada 9',
              'en' => 'Season 9',
              'it' => 'Stagione 9',
              'fr' => 'Saison 9',
              'zh-cn' => '第九赛季',
              'es' => 'Temporada 9',
              'ar' => 'Season 9',
              'ja' => 'シーズン9',
              'pl' => 'Sezon 9',
              'es-419' => 'Temporada 9',
              'tr' => '9. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison 9 – Ab sofort bis einschließlich 1. August.
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 3.500 V-Bucks</>.
    • <ItemName>Rox</> (aufrüstbares Outfit)
    • <ItemName>Hüter</> (Outfit)
    • <Bold>+50 %</> Saison-Match-EP
    • <Bold>+60 %</> Saison-Match-EP für Freunde
    • <Bold>zusätzliche wöchentliche Herausforderungen</>
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 100 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <ItemName>Bunker-Jonesy</> und <Bold>4 weitere Outfits</>
    • <Bold>1.300 V-Bucks</>
    • 7 Emotes
    • 6 Lackierungen
    • 7 Erntewerkzeuge
    • 1 Gefährte
    • 4 Hängegleiter
    • 6 Rücken-Accessoires
    • 5 Kondensstreifen
    • 13 Spraymotive
    • 3 Musikstücke
    • 1 Spielzeug
    • 20 Ladebildschirme
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Девятый сезон: до 1 августа
  
  Сразу же получите предметы <Bold>стоимостью более 3500 В-баксов!</>
    • Улучшающаяся экипировка <ItemName>Рокси</>;
    • экипировка <ItemName>Стража</>;
    • <Bold>+50% к опыту</> за матчи сезона;
    • <Bold>+60% к опыту</> друзей за матчи сезона;
    • <Bold>дополнительные еженедельные испытания</>.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут <Bold>более 100 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • экипировка <ItemName>Затворника Джоунси</> и <Bold>ещё 4 костюма;</>
    • <Bold>1300 В-баксов;</>
    • 7 эмоций;
    • 6 обёрток;
    • 7 инструментов;
    • 1 питомец;
    • 4 дельтаплана;
    • 6 украшений на спину;
    • 5 воздушных следов;
    • 13 граффити;
    • 3 музыкальные композиции;
    • 1 игрушка;
    • 20 экранов загрузки
      и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 9: 8월 1일 종료
  
  <Bold>3,500 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>록스</> 진화형 의상
    • <ItemName>센티널</> 진화형 의상
    • <Bold>50% 보너스</> 시즌 매치 XP
    • <Bold>60% 보너스</> 시즌 친구 매치 XP
    • <Bold>추가 주간 도전</>
  
  게임을 플레이하고 배틀패스 티어를 올려서 <Bold>100개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <ItemName>벙커 존시</> 외 <Bold>의상 4개</>
    • <Bold>1,300 V-Bucks</>
    • 이모트 7개
    • 외관 6개
    • 수확 도구 7개
    • 애완동물 1마리
    • 글라이더 4개
    • 등 장신구 6개
    • 트레일 5개
    • 스프레이 13개
    • 음악 트랙 3개
    • 장난감 1개
    • 로딩 화면 20개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第九賽季：現在起至8月1日
  
  立即獲得這些<Bold>價值逾3500V幣</>的物品。
    • <ItemName>草莓飛行員</>可進化服裝
    • <ItemName>裝甲雄雞</>服裝
    • <Bold>50%額外</>賽季匹配經驗
    • <Bold>60%額外</>賽季好友匹配經驗
    • <Bold>額外每週挑戰</>
  
  通過遊玩提升英雄季卡戰階，解鎖<Bold>百餘獎勵</>（通常需要75到150個小時的遊玩時間）。
    • <ItemName>地堡鐘斯</>和<Bold>4個額外服裝</>
    • <Bold>1300V幣</>
    • 7個姿勢
    • 6個皮膚
    • 7個採集工具
    • 1個寵物
    • 4個滑翔傘
    • 6個背部裝飾
    • 5個滑翔軌跡
    • 13個塗鴉
    • 3個音軌
    • 1個玩具
    • 20張載入介面
    • 以及更多獎勵！
  希望更快得到所有獎勵嗎？你可以隨時使用V幣購買戰階！',
              'pt-br' => 'Temporada 9: de hoje até 1.º de agosto
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 3.500 V-Bucks</>.
    • Traje Progressivo <ItemName>Rox</>
    • Traje Progressivo <ItemName>Sentinela</>
    • <Bold>50% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>60% de Bônus</> de EXP da Temporada em Partidas com Amigos
    • <Bold>Desafios Semanais Extras</>
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 100 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <ItemName>Jonesy — Bunker</> e <Bold>mais 4 Trajes</>
    • <Bold>1.300 V-Bucks</>
    • 7 Gestos
    • 6 Envelopamentos
    • 7 Ferramentas de Coleta
    • 1 Mascote
    • 4 Asas-deltas
    • 6 Acessórios para as Costas
    • 5 Rastros de Fumaça
    • 13 Sprays
    • 3 Faixas Musicais
    • 1 Brinquedo
    • 20 Telas de Carregamento
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season 9 Now through August 1.
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>Rox</> Progressive Outfit
    • <ItemName>Sentinel</> Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>60% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Bunker Jonesy</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 7 Emotes
    • 6 Wraps
    • 7 Harvesting Tools
    • 1 Pet
    • 4 Gliders
    • 6 Back Blings
    • 5 Contrails
    • 13 Sprays
    • 3 Music Tracks
    • 1 Toy
    • 20 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione 9, da ora fino a 1° agosto
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 3500 V-buck</>!
   • Costume progressivo <ItemName>Rox</>
   • Costume progressivo <ItemName>Sentinella</>
   • <Bold>Bonus del 50%</> dei PE partite stagionali
   • <Bold>Bonus del 60%</> dei PE partite amico stagionali
   • <Bold>Sfide settimanali extra</>
  
  Gioca per aumentare il livello del tuo Pass battaglia, sbloccando <Bold>più di 100 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
   • <ItemName>Jonesy Bunker</> e <Bold>altri 4 costumi</>
   • <Bold>1300 V-buck</>
   • 7 emote
   • 6 coperture
   • 7 strumenti raccolta
   • 1 piccolo amico
   • 4 deltaplani
   • 6 dorsi decorativi
   • 5 scie
   • 13 spray
   • 3 brani musicali
   • 1 giocattolo
   • 20 schermate di caricamento
   • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison 9 : jusqu\'au 1er août
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 3500 V-bucks</>.
    • Tenue évolutive <ItemName>Rox</>
    • Tenue <ItemName>Sentinelle</>
    • Bonus d\'EXP de saison de 50%
    • Bonus d\'EXP de saison de 10% pour des amis
    • <Bold>Des défis hebdomadaires supplémentaires</>
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 100 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <ItemName>Jonesy du bunker</> plus <Bold>4 autres tenues</>
    • <Bold>1300 V-bucks</>
    • 7 emotes
    • 6 revêtements
    • 7 outils de collecte
    • 1 compagnon
    • 4 planeurs
    • 6 accessoires de dos
    • 5 traînées de condensation
    • 13 aérosols
    • 3 pistes musicales
    • 1 jouet
    • 20 écrans de chargement
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第九赛季：现在起至8月1日
  
  立即获得这些<Bold>价值逾3500V币</>的物品。
    • <ItemName>草莓飞行员</>可进化服装
    • <ItemName>装甲雄鸡</>服装
    • <Bold>50%额外</>赛季匹配经验
    • <Bold>60%额外</>赛季好友匹配经验
    • <Bold>额外每周挑战</>
  
  通过游玩提升英雄季卡战阶，解锁<Bold>百余奖励</>（通常需要75到150个小时的游玩时间）。
    • <ItemName>地堡琼斯</>和<Bold>4个额外服装</>
    • <Bold>1300V币</>
    • 7个姿势
    • 6个皮肤
    • 7个采集工具
    • 1个宠物
    • 4个滑翔伞
    • 6个背部装饰
    • 5个滑翔轨迹
    • 13个涂鸦
    • 3个音轨
    • 1个玩具
    • 20张载入界面
    • 以及更多奖励！
  希望更快得到所有奖励吗？你可以随时使用V币购买战阶！',
              'es' => 'Temporada 9: desde ahora hasta el 1 de agosto.
  
  Consigue instantáneamente estos objetos <Bold>valorados en más de 3500 paVos</>.
    • Traje progresivo de <ItemName>Rox</>
    • Traje de <ItemName>Centinela</>
    • <Bold>Bonificación del 50 %</> de PE por partida de temporada
    • <Bold>Bonificación del 60 %</> de PE de partida amistosa de temporada
    • <Bold>Desafíos semanales adicionales</>
  
  Juega para subir de nivel tu pase de batalla y desbloquea <Bold>más de 100 recompensas</> (suele llevar entre 75 y 150 horas de juego).
    • <ItemName>Jonesy del búnker</> y <Bold>4 trajes más</>
    • <Bold>1300 paVos</>
    • 7 gestos
    • 6 envoltorios
    • 7 herramientas de recolección
    • 1 mascota
    • 4 alas delta
    • 6 accesorios mochileros
    • 5 estelas
    • 13 grafitis
    • 3 temas musicales
    • 1 juguete
    • 20 pantallas de carga
    • ¡Y muchísimo más!
  ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season 9 Now through August 1.
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>Rox</> Progressive Outfit
    • <ItemName>Sentinel</> Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>60% Bonus</> Season Friend Match XP
    • <Bold>Extra Weekly Challenges</>
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Bunker Jonesy</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 7 Emotes
    • 6 Wraps
    • 7 Harvesting Tools
    • 1 Pet
    • 4 Gliders
    • 6 Back Blings
    • 5 Contrails
    • 13 Sprays
    • 3 Music Tracks
    • 1 Toy
    • 20 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズン9: 8月1日まで
  
  <Bold>3,500 V-Bucks以上の価値がある</>アイテムを今すぐ手に入れましょう。
  • <ItemName>ロックス</>プログレッシブコスチューム
    • <ItemName>センチネル</>コスチューム
    • シーズンマッチXPの<Bold>50%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>60%ボーナス</>
    • <Bold>追加のウィークリーチャレンジ</>
  
  プレイしてバトルパスのレベルを上げると、<Bold>100以上の報酬</>をアンロックできます（通常、プレイにかかる時間は75～150時間程度)。
    • <ItemName>バンカージョンジー</>および<Bold>その他コスチュームx4</>
    • <Bold>1,300 V-Bucks</>
    • エモートx7
    • ラップx6
    • 収集ツールx7
    • ペットx1
    • グライダーx4
    • バックアクセサリーx6
    • コントレイルx5
    • スプレーx13
    • ミュージックトラックx3
    • おもちゃx1
    • ロード画面x20
    •他にも色々！
  もっと早く報酬を全部集めたい？ V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Sezon 9: od teraz do 1 sierpnia.
  
  Zgarnij od razu poniższe przedmioty <Bold>o wartości ponad 3500 V-dolców</>:
    • Strój progresywny: <ItemName>Roxi</>
    • Strój progresywny: <ItemName>K0gut</>
    • Sezonowa <Bold>premia +50% PD za grę</>
    • Sezonowa <Bold>premia +60% PD za grę ze znajomymi</>
    • Dostęp do <Bold>dodatkowych wyzwań tygodnia</>
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 100 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godz. gry).
    • <ItemName>Jonesy z Bunkra</> i <Bold>4 inne stroje</>
    • <Bold>1300 V-dolców</>
    • 7 emotek
    • 6 malowań
    • 1 pupil
    • 7 zbieraków
    • 4 lotnie
    • 6 plecaków
    • 5 smug
    • 13 graffiti
    • 3 tła muzyczne
    • 1 zabawka
   • 20 ekranów ładowania
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Temporada 9: ahora y hasta el 1 de agosto.
  
  Obtén al instante estos objetos que <Bold>cuestan más de 3500 monedas V</>.
    • Atuendo progresivo <ItemName>Rox</>
    • Atuendo <ItemName>Centinela</>
    • <Bold>50 % de bonificación</> de PE para partidas de la temporada
    • <Bold>60 % de bonificación</> de PE para partidas con amigos en la temporada
    • <Bold>Desafíos semanales adicionales</>
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 100 recompensas</> (esto lleva entre 75 y 100 horas de juego).
    • Atuendo <ItemName>Jonesy del búnker</> y <Bold>4 atuendos más</>
    • <Bold>1300 monedas V</>
    • 7 gestos
    • 6 papeles
    • 7 herramientas de recolección
    • 1 mascota
    • 4 planeadores
    • 6 mochilas retro
    • 5 estelas
    • 13 aerosoles
    • 3 pistas de música
    • 1 juguete
    • 20 pantallas de carga
    • ¡Y muchísimo más!
  ¿Quieres todo más rápido? ¡Usa las monedas V para comprar niveles cuando quieras!',
              'tr' => '9. Sezon: Şu andan 1 Ağustos’a kadar 
  
  <Bold>3.500 V-Papel’in üzerinde değeri olan</> bu içerikleri hemen kap.
    • İlerlemeli <ItemName>Pembeli Savaşçı</> Kıyafeti
    • <ItemName>Savaş Kuşu</> Kıyafeti
    • <Bold>%50 Bonus</> Sezonluk Maç TP’si
    • Arkadaşların için <Bold>%60 Bonus</> Sezonluk Maç TP’si
    • <Bold>İlave Haftalık Görevler</>
  
  Battle Royale oynayarak Savaş Bileti’nin aşamasını yükselt ve <Bold>100’den fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <ItemName>Sığınak Kaçkını Jonesy</> ve <Bold>4 Kıyafet</> daha
    • <Bold>1.300 V-Papel</>
    • 7 İfade
    • 6 Kaplama
    • 7 Toplama Aleti
    • 1 Sadık Dost
    • 4 Planör
    • 6 Sırt Süsü
    • 5 Dalış İzi
    • 13 Sprey
    • 3 Müzik Parçası
    • 1 Oyuncak
    • 20 Yükleme Ekranı
    • ve çok daha fazlası!
  Hepsini daha hızlı mı almak istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season9_BattlePass.DA_BR_Season9_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => '33E185A84ED7B64F2856E69AADFD092C',
            'devName' => 'BR.Season9.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle Pass-Stufe',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 티어',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Categoria de Passe de Batalha',
              'en' => 'Battle Pass Tier',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Palier du Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Nivel del pase de batalla',
              'ar' => 'Battle Pass Tier',
              'ja' => 'バトルパスティア',
              'pl' => 'Stopień karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 받으세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => 'ステキな報酬を今すぐゲット！',
              'pl' => 'Zdobądź super nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödülleri kap!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
      16 => 
      array (
        'name' => 'BRSeason10',
        'catalogEntries' => 
        array (
          0 => 
          array (
            'offerId' => '2E43CCD24C3BE8F5ABBDF28E233B9350',
            'devName' => 'BR.Season10.BattlePass.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 950,
                'dynamicRegularPrice' => -1,
                'finalPrice' => 950,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 950,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'refundable' => false,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2E43CCD24C3BE8F5ABBDF28E233B9350',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
              0 => 
              array (
                'key' => 'Preroll',
                'value' => 'False',
              ),
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 1,
            'title' => 
            array (
              'de' => 'Battle Pass',
              'ru' => 'Боевой пропуск',
              'ko' => '배틀패스',
              'zh-hant' => '英雄季卡',
              'pt-br' => 'Passe de Batalha',
              'en' => 'Battle Pass',
              'it' => 'Pass battaglia',
              'fr' => 'Passe de combat',
              'zh-cn' => '英雄季卡',
              'es' => 'Pase de batalla',
              'ar' => 'Battle Pass',
              'ja' => 'バトルパス',
              'pl' => 'Karnet bojowy',
              'es-419' => 'Pase de batalla',
              'tr' => 'Savaş Bileti',
            ),
            'shortDescription' => 
            array (
              'de' => 'Saison X',
              'ru' => 'Десятый сезон',
              'ko' => '시즌 X',
              'zh-hant' => '第十賽季',
              'pt-br' => 'Temporada X',
              'en' => 'Season X',
              'it' => 'Stagione X',
              'fr' => 'Saison X',
              'zh-cn' => '第X赛季',
              'es' => 'Temporada X',
              'ar' => 'Season X',
              'ja' => 'シーズンX',
              'pl' => 'Sezon X',
              'es-419' => 'Temporada X',
              'tr' => 'X. Sezon',
            ),
            'description' => 
            array (
              'de' => 'Saison X – Ab sofort bis einschließlich 6. Oktober.
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 3.500 V-Bucks</>.
    • <ItemName>X-Meister</> (Outfit)
    • <ItemName>Catalyst</> (Outfit)
    • <Bold>+50 %</> Saison-Match-EP
    • <Bold>+60 %</> Saison-Match-EP für Freunde
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 100 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <ItemName>Ultimaritter</> und <Bold>4 weitere Outfits</>
    • <Bold>1.300 V-Bucks</>
    • 7 Emotes
    • 6 Lackierungen
    • 6 Erntewerkzeuge
    • 1 Gefährte
    • 7 Hängegleiter
    • 7 Rücken-Accessoires
    • 5 Kondensstreifen
    • 17 Spraymotive
    • 3 Musikstücke
    • 1 Spielzeug
    • 27 Ladebildschirme
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Десятый сезон: до 6 октября
  
  Сразу же получите предметы <Bold>стоимостью более 3500 В-баксов!</>
    • Экипировка <ItemName>Повелителя шипов</>;
    • экипировка <ItemName>Тануки</>;
    • <Bold>+50% к опыту</> за матчи сезона;
    • <Bold>+60% к опыту</> друзей за матчи сезона.
   
  Играйте, повышайте уровень боевого пропуска — вас ждут <Bold>более 100 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • Экипировка <ItemName>Несокрушимого рыцаря</> и <Bold>ещё 4 костюма;</>
    • <Bold>1300 В-баксов;</>
    • 7 эмоций;
    • 6 обёрток;
    • 6 инструментов;
    • 1 питомец;
    • 7 дельтапланов;
    • 7 украшений на спину;
    • 5 воздушных следов;
    • 17 граффити;
    • 3 музыкальные композиции;
    • 1 игрушка;
    • 27 экранов загрузки
      и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 X: 10월 6일 종료
  
  <Bold>3,500 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>엑스로드</> 진화형 의상
    • <ItemName>카탈리스트</> 진화형 의상
    • <Bold>50% 보너스</> 시즌 매치 XP
    • <Bold>60% 보너스</> 시즌 친구 매치 XP
  
  게임을 플레이하고 배틀패스 티어를 올려서 <Bold>100개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <ItemName>최후의 기사</> 외 <Bold>의상 4개</>
    • <Bold>1,300 V-Bucks</>
    • 이모트 7개
    • 외관 6개
    • 수확 도구 6개
    • 애완동물 1마리
    • 글라이더 7개
    • 등 장신구 6개
    • 트레일 5개
    • 스프레이 17개
    • 음악 트랙 3개
    • 장난감 1개
    • 로딩 화면 27개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第十賽季：從現在開始至10月6日。
  
  立即獲得以下<Bold>價值逾3500V幣</>的物品。
    • <ItemName>廢土領主-X</>服裝
    • <ItemName>靈狸</>服裝
    • <Bold>50%額外</>賽季匹配經驗
    • <Bold>60%額外</>賽季好友匹配經驗
  
  通過遊玩提升英雄季卡戰階，解鎖<Bold>至少75個獎勵</>（通常需要75到150個小時的遊玩時間）。
    • <ItemName>終極騎士</>和<Bold>4個額外服裝</>
    • <Bold>1300V幣</>
    • 7個姿勢
    • 6個皮膚
    • 6個採集工具
    • 一個寵物
    • 7個滑翔傘
    • 7個背部裝飾
    • 5滑翔軌跡
    • 17個塗鴉
    • 3個音軌
    • 一個玩具
    • 27個載入介面
    • 以及更多獎勵！
  Want it all faster? You can useV幣 to buy tiers any time!',
              'pt-br' => 'Temporada X: de hoje até 6 de outubro.
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 3.500 V-Bucks</>.
    • Traje <ItemName>Lorde X</>
    • Traje <ItemName>Transcendental</>
    • <Bold>50% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>60% de Bônus</> de EXP da Temporada em Partidas com Amigos
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 100 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <ItemName>Cavaleiro Supremo</> e <Bold>mais 4 Trajes</>
    • <Bold>1.300 V-Bucks</>
    • 7 Gestos
    • 6 Envelopamentos
    • 6 Ferramentas de Coleta
    • 1 Mascote
    • 7 Asas-deltas
    • 7 Acessórios para as Costas
    • 5 Rastros de Fumaça
    • 17 Sprays
    • 3 Faixas Musicais
    • 1 Brinquedo
    • 27 Telas de Carregamento
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season X Now through October 6.
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>X-Lord</> Outfit
    • <ItemName>Catalyst</> Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>60% Bonus</> Season Friend Match XP
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Ultima Knight</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 7 Emotes
    • 6 Wraps
    • 6 Harvesting Tools
    • 1 Pet
    • 7 Gliders
    • 7 Back Blings
    • 5 Contrails
    • 17 Sprays
    • 3 Music Tracks
    • 1 Toy
    • 27 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione X, da ora fino al 6 ottobre
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 3.500 V-buck</>!
   • Costume <ItemName>Lord-X</>
   • Costume <ItemName>Catalizzatore</>
   • <Bold>Bonus 50%</> PE partite stagionali
   • <Bold>Bonus 60%</> PE amici partite stagionali
  
  Gioca per aumentare il livello del tuo Pass battaglia, sbloccando <Bold>più di 100 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
   • <ItemName>Cavaliere Ultima</> e <Bold>4 costumi in più</>
   • <Bold>1.300 V-Buck</>
   • 7 emote
   • 6 coperture
   • 6 strumenti raccolta
   • 1 piccolo amico
   • 7 deltaplani
   • 7 dorsi decorativi
   • 5 scie
   • 17 spray
    • 3 brani musicali
    • 1 giocattolo
    • 27 schermate di caricamento
    • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison X : jusqu\'au 6 octobre.
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 3500 V-bucks</>.
    • Tenue <ItemName>Maître occulte</>
    • Tenue <ItemName>Déclic</>
    • Bonus d\'EXP de saison de 50%
    • Bonus d\'EXP de saison de 60% pour des amis
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 100 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <ItemName>Chevalier ultime</> et <Bold>4 autres tenues</>
    • <Bold>1300 V-bucks</>
    • 7 emotes
    • 6 revêtements
    • 6 outils de collecte
    • 1 compagnon
    • 7 planeurs
    • 7 accessoires de dos
    • 5 traînées de condensation
    • 17 aérosols
    • 3 pistes musicales
    • 1 jouet
    • 27 écrans de chargement
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第X赛季：从现在开始至10月6日。
  
  立即获得以下<Bold>价值逾3500V币</>的物品。
    • <ItemName>废土领主-X</>服装
    • <ItemName>灵狸</>服装
    • <Bold>50%额外</>赛季匹配经验
    • <Bold>60%额外</>赛季好友匹配经验
  
  通过游玩提升英雄季卡战阶，解锁<Bold>至少75个奖励</>（通常需要75到150个小时的游玩时间）。
    • <ItemName>终极骑士</>和<Bold>4个额外服装</>
    • <Bold>1300V币</>
    • 7个姿势
    • 6个皮肤
    • 6个采集工具
    • 一个宠物
    • 7个滑翔伞
    • 7个背部装饰
    • 5滑翔轨迹
    • 17个涂鸦
    • 3个音轨
    • 一个玩具
    • 27个载入界面
    • 以及更多奖励！
  希望更快吗？你可以随时使用V币购买战阶！',
              'es' => 'Temporada X: desde ahora hasta el 6 de octubre.
  
  Consigue instantáneamente estos objetos <Bold>valorados en más de 3500 paVos</>.
    • Traje de <ItemName>Señor X</>
    • Traje de <ItemName>Catalizadora</>
    • <Bold>Bonificación del 50 %</> de PE por partida de temporada
    • <Bold>Bonificación del 60 %</> de PE de partida amistosa de temporada
  \\Juega para subir de nivel tu pase de batalla y desbloquea <Bold>más de 100 recompensas</> (suele llevar entre 75 y 150 horas de juego).
    • <ItemName>Caballero Ultima</> y <Bold>4 trajes más</>
    • <Bold>1300 paVos</>
    • 7 gestos
    • 6 envoltorios
    • 6 herramientas de recolección
    • 1 mascota
    • 7 alas delta
    • 7 accesorios mochileros
    • 5 estelas
    • 17 grafitis
    • 3 temas musicales
    • 1 juguete
    • 27 pantallas de carga
    • ¡Y muchísimo más!
  ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season X Now through October 6.
  
  Instantly get these items <Bold>valued at over 3,500 V-Bucks</>.
    • <ItemName>X-Lord</> Outfit
    • <ItemName>Catalyst</> Outfit
    • <Bold>50% Bonus</> Season Match XP
    • <Bold>60% Bonus</> Season Friend Match XP
  
  Play to level up your Battle Pass, unlocking <Bold>over 100 rewards</> (typically takes 75 to 150 hours of play).
    • <ItemName>Ultima Knight</> and <Bold>4 more Outfits</>
    • <Bold>1,300 V-Bucks</>
    • 7 Emotes
    • 6 Wraps
    • 6 Harvesting Tools
    • 1 Pet
    • 7 Gliders
    • 7 Back Blings
    • 5 Contrails
    • 17 Sprays
    • 3 Music Tracks
    • 1 Toy
    • 27 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズンX: 10月6日まで。
  
  <Bold>3,500 V-Bucks以上の価値</>があるアイテムを今すぐ手に入れましょう。
    • コスチューム「<ItemName>Xロード</>」
    • コスチューム「<ItemName>カタリスト</>」</>
    • シーズンマッチXPの<Bold>50%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>60%ボーナス
  
  プレイしてバトルパスのレベルを上げると、<Bold>100以上の報酬</>をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。
    • 「<ItemName>アルティマナイト</>」及び<Bold>さらなるコスチュームx4</>
    • <Bold>1,300 V-Bucks</>
    • エモートx7
    • ラップx6
    • 収集ツールx6
    • ペットx1
    • グライダーx7
    • バックアクセサリーx7
    • コントレイルx5
    • スプレーx17
    • ミュージックトラックx3
    • おもちゃx1
    • ロード画面x27
   • 他にも盛りだくさん！
  もっと早く報酬を全部集めたいという方は、V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Season X: od teraz do 6 października.
  
  Zgarnij od razu poniższe przedmioty <Bold>o wartości ponad 3500 V-dolców</>.
    • Strój <ItemName>X-Lord</>
    • Strój <ItemName>Katalizator</>
    • Sezonowa <Bold>premia 50% PD</> za grę
    • Sezonowa <Bold>premia 60% PD</> za grę ze znajomym
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 100 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godz. gry).
    • <ItemName>Rycerz Ultima</> i <Bold>4 inne stroje</>
    • <Bold>1300 V-dolców</>
    • 7 emotek
    • 6 malowań
    • 6 zbieraków
    • 1 pupil
    • 7 lotni
    • 7 plecaków
    • 5 smug
    • 17 graffiti
    • 3 tła muzyczne
    • 1 zabawka
    • 27 ekranów wczytywania
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Desde la temporada X hasta el 6 de octubre.
  \\Obtén al instante estos objetos <Bold>que cuestan más de 3500 monedas V</>.
    • Atuendo <ItemName>Señor X</>
    • Atuendo <ItemName>Catalizadora</>
    • <Bold>50 % de bonificación</> de PE para partidas de la temporada
    • <Bold>60 % de bonificación</> de PE para partidas con amigos en la temporada
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 100 recompensas</> (esto lleva entre 75 y 150 horas de juego).
    • <ItemName>Caballero Ultima</> y <Bold>4 atuendos más</>
    • <Bold>1300 monedas V</>
    • 7 gestos
    • 6 papeles
    • 6 herramientas de recolección
    • 1 mascota
    • 7 planeadores
    • 7 mochilas retro
    • 5 estelas
    • 17 aerosoles
    • 3 pistas de música
    • 1 juguete
    • 27 pantallas de carga
   • ¡Y mucho más!
  ¿Lo quieres todo más rápido? ¡Puedes usar las monedas V para comprar niveles cuando quieras!',
              'tr' => 'X. Sezon: Şu andan 6 Ekim\'e kadar.
  
  <Bold>3.500 V-Papel\'in üzerinde değeri olan</> bu içerikleri hemen kap.
    • <ItemName>X Lordu</> Kıyafeti
    • <ItemName>Düz Kontak</> Kıyafeti
    • <Bold>%50 Bonus</> Sezonluk Maç TP\'si
    • Arkadaşların için <Bold>%60 Bonus</> Sezonluk Maç TP\'si
  
  Battle Royale oynayarak Savaş Bileti\'nin aşamasını yükselt ve <Bold>100\'den fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <ItemName>Kızıl Şövalye</> ve <Bold>4 Kıyafet</> daha
    • <Bold>1.300 V-Papel</>
    • 7 İfade
    • 6 Kaplama
    • 6 Toplama Aleti
    • 1 Sadık Dost
    • 7 Planör
    • 7 Sırt Süsü
    • 5 Dalış İzi
    • 17 Sprey
    • 3 Müzik Parçası
    • 1 Oyuncak
    • 27 Yükleme Ekranı
    • ve çok daha fazlası!
  Hepsini daha hızlı mı almak istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season10_BattlePass.DA_BR_Season10_BattlePass',
            'itemGrants' => 
            array (
            ),
          ),
          1 => 
          array (
            'offerId' => '259920BC42F0AAC7C8672D856C9B622C',
            'devName' => 'BR.Season10.BattleBundle.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 4700,
                'dynamicRegularPrice' => -1,
                'finalPrice' => 2800,
                'saleType' => 'PercentOff',
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 2800,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'refundable' => false,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
              0 => 
              array (
                'requirementType' => 'DenyOnFulfillment',
                'requiredId' => '2E43CCD24C3BE8F5ABBDF28E233B9350',
                'minQuantity' => 1,
              ),
            ),
            'metaInfo' => 
            array (
              0 => 
              array (
                'key' => 'Preroll',
                'value' => 'False',
              ),
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle Pass-Paket',
              'ru' => 'Боевой комплект',
              'ko' => '배틀번들',
              'zh-hant' => '戰鬥套組',
              'pt-br' => 'Pacotão de Batalha',
              'en' => 'Battle Bundle',
              'it' => 'Bundle battaglia',
              'fr' => 'Pack de combat',
              'zh-cn' => '战斗套组',
              'es' => 'Lote de batalla',
              'ar' => 'Battle Bundle',
              'ja' => 'バトルバンドル',
              'pl' => 'Zestaw bojowy',
              'es-419' => 'Paquete de batalla',
              'tr' => 'Savaş Paketi',
            ),
            'shortDescription' => 
            array (
              'de' => 'Battle Pass + 25 Stufen!',
              'ru' => 'Боевой пропуск + 25 уровней!',
              'ko' => '배틀패스 + 25티어!',
              'zh-hant' => '英雄季卡增加25戰階！',
              'pt-br' => 'Passe de Batalha + 25 categorias!',
              'en' => 'Battle Pass + 25 tiers!',
              'it' => 'Pass battaglia + 25 livelli!',
              'fr' => 'Passe de combat + 25 paliers !',
              'zh-cn' => '英雄季卡增加25战阶！',
              'es' => '¡Pase de batalla y 25 niveles!',
              'ar' => 'Battle Pass + 25 tiers!',
              'ja' => 'バトルパス+25ティア！',
              'pl' => 'Karnet bojowy + 25 stopni!',
              'es-419' => '¡Pase de batalla + 25 niveles!',
              'tr' => 'Savaş Bileti + 25 aşama!',
            ),
            'description' => 
            array (
              'de' => 'Saison X – Ab sofort bis einschließlich 6. Oktober.
  
  Erhalte sofort diese Gegenstände <Bold>im Wert von über 10.000 V-Bucks</>.
    • <ItemName>X-Meister</> (Outfit)
    • <ItemName>Catalyst</> (Outfit)
    • <ItemName>Tilted-Teknique</> (Outfit)
    • <ItemName>Rostkiste</> (Hängegleiter)
    • <ItemName>Emote-Tarnung</> (Lackierung)
    • <ItemName>Rissblitze</> (Kondensstreifen)
    • 300 V-Bucks
    • <ItemName>The Final Showdown</> (Musikstück)
    • <Bold>+70 %</> Saison-Match-EP
    • <Bold>+80 %</> Saison-Match-EP für Freunde
    • und noch mehr!
  
  Spiele weiter und stufe deinen Battle Pass auf, um <Bold>über 75 Belohnungen</> freizuschalten (im Normalfall werden dafür 75 bis 150 Spielstunden benötigt).
    • <Bold>4 weitere Outfits</>
    • <Bold>1.000 V-Bucks</>
    • 6 Emotes
    • 4 Lackierungen
    • 5 Erntewerkzeuge
    • 1 Gefährte
    • 6 Hängegleiter
    • 7 Rücken-Accessoires
    • 3 Kondensstreifen
    • 13 Spraymotive
    • 2 Musikstücke
    • 1 Spielzeug
    • 23 Ladebildschirme
    • und noch eine ganze Menge mehr!
  Das dauert dir zu lange? Du kannst dir mit V-Bucks jederzeit Stufen kaufen!',
              'ru' => 'Десятый сезон: до 6 октября
  
  Сразу же получите предметы <Bold>стоимостью более 10 000 В-баксов!</>
    • Экипировка <ItemName>Повелителя шипов</>;
    • экипировка <ItemName>Тануки</>;
    • экипировка <ItemName>Мисс Будущее</>;
    • дельтаплан <ItemName>«Драндулет»</>;
    • обёртка <ItemName>«Танцы»</>;
    • воздушный след <ItemName>«Сияние разлома»</>;
    • 300 В-баксов;
    • музыкальная композиция <ItemName>«Решающая битва»</>;
    • <Bold>+70% к опыту</> за матчи сезона;
    • <Bold>+80% к опыту</> друзей за матчи сезона;
    • и многое другое.
  
  Играйте, повышайте уровень боевого пропуска — и вас ждут <Bold>более 75 наград</>. Обычно, чтобы открыть все награды, требуется 75–150 часов игры.
    • <Bold>Ещё 4 костюма;</>
    • <Bold>1000 В-баксов</>;
    • 6 эмоций;
    • 4 обёртки;
    • 5 инструментов;
    • 1 питомец;
    • 6 дельтапланов;
    • 7 украшений на спину;
    • 3 воздушных следа;
    • 13 граффити;
    • 2 музыкальные композиции;
    • 1 игрушка;
    • 23 экрана загрузки
       и это ещё не всё!
  Не хотите ждать? Уровни можно быстро получить за В-баксы!',
              'ko' => '시즌 X: 10월 6일 종료
  
  <Bold>10,000 V-Bucks 이상의 가치</>가 있는 여러 아이템을 즉시 받아가세요.
    • <ItemName>엑스로드</> 의상
    • <ItemName>카탈리스트</> 의상
    • <ItemName>틸티드 테크니크 아티스트</> 의상
    • <ItemName>고철통</> 글라이더
    • <ItemName>이모트 위장 패턴</> 외관
    • <ItemName>균열 번갯불</> 스카이다이빙 트레일
    • 300 V-Bucks
    • <ItemName>마지막 결전</> 음악 트랙
    • <Bold>70% 보너스</> 시즌 매치 XP
    • <Bold>80% 보너스</> 시즌 친구 매치 XP
    • 그 외 더 많은 혜택!
  
  게임을 플레이하고 배틀패스 티어를 올려서 <Bold>75개 이상의 보상</>을 획득해보세요(보통 75-150시간 소요).
    • <Bold>추가 의상 4개</>
    • <Bold>1,000 V-Bucks</>
    • 이모트 6개
    • 외관 4개
    • 수확 도구 5개
    • 애완동물 1마리
     • 글라이더 6개
    • 등 장신구 7개
    • 트레일 3개
    • 스프레이 13개
    • 음악 트랙 2개
    • 장난감 1개
    • 로딩 화면 23개
    • 그 외 많은 혜택!
  더 빨리 보상을 얻고 싶으신가요? V-Bucks를 사용해서 언제든지 티어를 구매할 수 있습니다!',
              'zh-hant' => '第十賽季：從現在開始至10月6日。
  
  立即獲得以下<Bold>價值逾10000V幣</>的物品。
    • <ItemName>廢土領主-X</>服裝
    • <ItemName>靈狸</>服裝
    • <ItemName>斜塔塗鴉大師</>服裝
    • <ItemName>垃圾鏟鬥</>滑翔傘
    • <ItemName>姿勢迷彩 </>皮膚
    • <ItemName>裂隙閃電</>滑翔軌跡
    • 300V幣
    • <ItemName>最終決戰 </>音軌
    • <Bold>70%額外</>賽季匹配經驗
    • <Bold>80%額外</>賽季好友匹配經驗
    • 以及更多獎勵！
  
  通過遊玩提升英雄季卡戰階，解鎖<Bold>至少75個獎勵</>（通常需要75到150個小時的遊玩時間）。
    • <Bold>4個額外服裝</>
    • <Bold>1000V幣</>
    • 6個姿勢
    • 4個皮膚
    • 5個採集工具
    • 1個寵物
    • 6個滑翔傘
    • 7個背部裝飾
    • 3個滑翔軌跡
    • 13個塗鴉
    • 2個音軌
    • 1個玩具
    • 23個載入介面
    • 以及更多獎勵！
  希望更快嗎？你可以隨時使用V幣購買戰階！',
              'pt-br' => 'Temporada X: de hoje até 6 de outubro.
  
  Receba instantaneamente estes itens <Bold>avaliados em mais de 10.000 V-Bucks</>.
    • Traje <ItemName>Lorde X</>
    • Traje <ItemName>Transcendental</>
    • Traje <ItemName>Téknica Torta</>
    • Asa-delta <ItemName>Carcaça de Ferro-velho</>
    • Envelopamento <ItemName>Camuflagem de Gesto</>
    • Rastro de Fumaça <ItemName>Relâmpago de Fenda</>
    • 300 V-Bucks
    • Faixa Musical<ItemName>O Confronto Final</>
    • <Bold>70% de Bônus</> de EXP da Temporada em Partidas
    • <Bold>80% de Bônus</> de EXP da Temporada em Partidas com Amigos
    • e mais!
  
  Jogue para subir o nível do seu Passe de Batalha, desbloqueando <Bold>mais de 75 recompensas</> (leva em média de 75 a 150 horas de jogo).
    • <Bold>Mais 4 Trajes</>
    • <Bold>1.000 V-Bucks</>
    • 6 Gestos
    • 4 Envelopamentos
    • 5 Ferramentas de Coleta
    • 1 Mascote
    • 6 Asas-deltas
    • 7 Acessórios para as Costas
    • 3 Rastros de Fumaça
    • 13 Sprays
    • 2 Faixas Musicais
    • 1 Brinquedo
    • 23 Telas de Carregamento
    • e muito mais!
  Quer obter tudo mais rápido? Você pode comprar categorias com V-Bucks a qualquer hora!',
              'en' => 'Season X Now through October 6.
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>X-Lord</> Outfit
    • <ItemName>Catalyst</> Outfit
    • <ItemName>Tilted Teknique</> Outfit
    • <ItemName>Junk Bucket</> Glider
    • <ItemName>Emote Camo </> Wrap
    • <ItemName> Rift Lightning </> Contrails
    • 300 V-Bucks
    • <ItemName>The Final Showdown </> Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>80% Bonus</> Season Friend Match XP
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,000 V-Bucks</>
    • 6 Emotes
    • 4 Wraps
    • 5 Harvesting Tools
    • 1 Pet
    • 6 Gliders
    • 7 Back Blings
    • 3 Contrails
    • 13 Sprays
    • 2 Music Tracks
    • 1 Toy
    • 23 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'it' => 'Stagione X, da ora fino al 6 ottobre
  
  Ottieni subito questi oggetti <Bold>dal valore di oltre 10.000 V-buck</>!
   • Costume <ItemName>Lord-X</>
   • Costume <ItemName>Catalizzatore</>
   • Costume <ItemName>PinnacoTeknica</>
   • Deltaplano <ItemName>Secchio di ciarpame</>
    • Copertura <ItemName>Mimetica emote</>
   • Scia <ItemName>Fulmine della fenditura</>
    • 300 V-buck
    • Brano musicale <ItemName>Il Duello finale</>
   • <Bold>Bonus 70%</> PE partite stagionali
   • <Bold>Bonus 80%</> PE amici partite stagionali
   • E altro ancora!
  
  Gioca per aumentare il livello del tuo Pass battaglia, sbloccando <Bold>più di 75 ricompense</> (per un totale indicativo di 75-150 ore di gioco).
   • <Bold>4 costumi in più</>
   • <Bold>1.000 V-Buck</>
   • 6 emote
   • 4 coperture
   • 5 strumenti raccolta
   • 1 piccolo amico
   • 6 deltaplani
   • 7 dorsi decorativi
   • 3 scie
   • 13 spray
    • 2 brani musicali
    • 1 giocattolo
    • 23 schermate di caricamento
    • E altro ancora!
  Vuoi tutto e subito? Puoi acquistare livelli usando V-buck in qualsiasi momento!',
              'fr' => 'Saison X : jusqu\'au 6 octobre.
  
  Recevez immédiatement ces objets <Bold>d\'une valeur supérieure à 10 000 V-bucks</>.
    • Tenue <ItemName>Maître occulte</>
    • Tenue <ItemName>Déclic</>
    • Tenue <ItemName>Graffeuse de Tilted</>
    • Planeur <ItemName>Ferrailleur</>
    • Revêtement <ItemName>Camouflage emote</>
    • Traînée de condensation <ItemName>Faille fulgurante</>
    • 300 V-bucks
    • Musique <ItemName>Bataille finale </>
    • Bonus d\'EXP de saison de 70%
    • Bonus d\'EXP de saison de 80% pour des amis
    • Et plus !
  
  Jouez pour augmenter le niveau de votre Passe de combat et déverrouiller <Bold>plus de 75 récompenses</> (nécessitant de 75 à 150 heures de jeu).
    • <Bold>4 autres tenues</>
    • <Bold>1000 V-bucks</>
    • 6 emotes
    • 4 revêtements
    • 5 outils de collecte
    • 1 compagnon
    • 6 planeurs
    • 7 accessoires de dos
    • 3 traînées de condensation
    • 13 aérosols
    • 2 musiques
    • 1 jouet
    • 23 écrans de chargement
    • Et plus !
  Envie d\'aller plus vite ? Utilisez vos V-bucks pour acheter des niveaux à tout moment !',
              'zh-cn' => '第X赛季：从现在开始至10月6日。
  
  立即获得以下<Bold>价值逾10000V币</>的物品。
    • <ItemName>废土领主-X</>服装
    • <ItemName>灵狸</>服装
    • <ItemName>斜塔涂鸦大师</>服装
    • <ItemName>垃圾铲斗</>滑翔伞
    • <ItemName>尬舞迷彩 </>皮肤
    • <ItemName>裂隙闪电</>滑翔轨迹
    • 300V币
    • <ItemName>最终决战 </>音轨
    • <Bold>70%额外</>赛季匹配经验
    • <Bold>80%额外</>赛季好友匹配经验
    • 以及更多奖励！
  
  通过游玩提升英雄季卡战阶，解锁<Bold>至少75个奖励</>（通常需要75到150个小时的游玩时间）。
    • <Bold>4个额外服装</>
    • <Bold>1000V币</>
    • 6个姿势
    • 4个皮肤
    • 5个采集工具
    • 1个宠物
    • 6个滑翔伞
    • 7个背部装饰
    • 3个滑翔轨迹
    • 13个涂鸦
    • 2个音轨
    • 1个玩具
    • 23个载入界面
    • 以及更多奖励！
  希望更快吗？你可以随时使用V币购买战阶！',
              'es' => 'Temporada X: desde ahora hasta el 6 de octubre.
  
  Consigue instantáneamente estos objetos <Bold>valorados en más de 10 000 paVos</>.
    • Traje de <ItemName>Señor X</>
    • Traje de <ItemName>Catalizadora</>
    • Traje de <ItemName>Neotéknica</>
    • Ala delta <ItemName>Cubo de chatarra</>
    • Envoltorio <ItemName>Gesto Cami</>
    • Estela <ItemName>Relámpago de la grieta</>
    • 300 paVos
    • Tema musical <ItemName>El enfrentamiento final</>
    • <Bold>Bonificación del 70 %</> de PE por partida de temporada
    • <Bold>Bonificación del 80 %</> de PE de partida amistosa de temporada
    • ¡Y mucho más!
  
  Juega para subir de nivel tu pase de batalla y desbloquea <Bold>más de 75 recompensas</> (suele llevar entre 75 y 150 horas de juego).
    • <Bold>4 trajes más</>
    • <Bold>1000 paVos</>
    • 6 gestos
    • 4 envoltorios
    • 5 herramientas de recolección
    • 1 mascota
    • 6 alas delta
    • 7 accesorios mochileros\\  • 3 estelas
    • 13 grafitis
    • 2 temas musicales
    • 1 juguete
    • 23 pantallas de carga
    • ¡Y muchísimo más!
  ¿Lo quieres más rápido? ¡Puedes usar paVos para comprar niveles siempre que quieras!',
              'ar' => 'Season X Now through October 6.
  
  Instantly get these items <Bold>valued at over 10,000 V-Bucks</>.
    • <ItemName>X-Lord</> Outfit
    • <ItemName>Catalyst</> Outfit
    • <ItemName>Tilted Teknique</> Outfit
    • <ItemName>Junk Bucket</> Glider
    • <ItemName>Emote Camo </> Wrap
    • <ItemName> Rift Lightning </> Contrails
    • 300 V-Bucks
    • <ItemName>The Final Showdown </> Music Track
    • <Bold>70% Bonus</> Season Match XP
    • <Bold>80% Bonus</> Season Friend Match XP
    • and more!
  
  Play to level up your Battle Pass, unlocking <Bold>over 75 rewards</> (typically takes 75 to 150 hours of play).
    • <Bold>4 more Outfits</>
    • <Bold>1,000 V-Bucks</>
    • 6 Emotes
    • 4 Wraps
    • 5 Harvesting Tools
    • 1 Pet
    • 6 Gliders
    • 7 Back Blings
    • 3 Contrails
    • 13 Sprays
    • 2 Music Tracks
    • 1 Toy
    • 23 Loading Screens
    • and so much more!
  Want it all faster? You can use V-Bucks to buy tiers any time!',
              'ja' => 'シーズンX: 10月6日まで。
  
  <Bold>10,000 V-Bucks以上の価値がある</>以下のアイテムをすぐに入手できます。
    • コスチューム「<ItemName>Xロード</>」
    • コスチューム「<ItemName>カタリスト</>」
    • コスチューム「<ItemName>ティルテッドテクニーク</>」
    • グライダー「 <ItemName>ジャンクバケット</>」
    • ラップ「<ItemName>エモートカモ</>」
    • コントレイル「<ItemName>リフトライトニング</>」
    • 300 V-Bucks
    •  ミュージックトラック「<ItemName>最終決戦</>」
    • シーズンマッチXPの<Bold>70%ボーナス</>
    • シーズンフレンドマッチXPの<Bold>80%ボーナス</>
    • 他にも盛りだくさん！
  
  プレイしてバトルパスのレベルを上げると、<Bold>75個以上の報酬</>をアンロックできます(通常、プレイにかかる時間は75～150時間程度)。
    • <Bold>さらなるコスチュームx4</>
    • <Bold>1,000 V-Bucks</>
    • エモートx6
    • ラップx4
    • 収集ツールx5
    • ペットx1
    • グライダーx6
    • バックアクセサリーx7
    • コントレイルx3
    • スプレーx13
    
    • 2 ミュージックトラックx2
    • おもちゃx1
    • ロード画面x23  • 他にも盛りだくさん！
  もっと早く報酬を全部集めたいという方は、V-Bucksでいつでもティアを購入できます！',
              'pl' => 'Sezon X: od teraz do 6 października.
  
  Zgarnij od razu poniższe przedmioty <Bold>o wartości ponad 10 000 V-dolców</>.
    • Strój <ItemName>X-Lord</>
    • Strój <ItemName>Katalizator</>
    • Strój <ItemName>Wykrzywiona Teknique</>
    • Lotnia <ItemName>Złomolot</>
    • Malowanie <ItemName>Kamuflaż emotkowy</>
    • Smuga <ItemName>Błyskawica szczeliny</>
    • 300 V-dolców
    • Tło muzyczne <ItemName>Ostatnie Starcie</>
    • Sezonowa <Bold>premia 70% PD</> za grę
    • Sezonowa <Bold>premia 80% PD</> za grę ze znajomym
    • I nie tylko!
  
  Graj, aby awansować karnet bojowy i zdobyć <Bold>ponad 75 nagród</> (ich zebranie zajmuje zwykle od 75 do 150 godzin gry).
    • <Bold>4 inne stroje</>
    • <Bold>1000 V-dolców</>
    • 6 emotek
    • 4 malowania
    • 5 zbieraków
    • 1 pupil
    • 6 lotni
    • 7 plecaków
    • 3 smugi
    • 13 graffiti
    • 2 tła muzyczne
    • 1 zabawka
    • 23 ekrany wczytywania
    • I dużo więcej!
  Chcesz rozwijać się szybciej? W każdej chwili możesz kupić stopnie za V-dolce!',
              'es-419' => 'Desde la temporada X hasta el 6 de octubre.
  
  Obtén al instante estos objetos <Bold>que cuestan más de 10 000 monedas V</>.
    • Atuendo <ItemName>Señor X</>
    • Atuendo <ItemName>Catalizadora</>
    • Atuendo <ItemName>Neotéknica</>
    • Planeador <ItemName>Montón de chatarra</>
    • Papel <ItemName>Camuflaje de gestos </>
    • Estela <ItemName> Relámpago de la grieta </>
    • 300 monedas V
    • Pista de música <ItemName>El enfrentamiento final </>
    • <Bold>70% de bonificación</> de PE para partidas de la temporada
    • <Bold>80% de bonificación</> de PE para partidas con amigos en la temporada
    • ¡Y mucho más!
  
  Juega para subir de nivel el pase de batalla y desbloquear <Bold>más de 75 recompensas</> (esto lleva entre 75 y 150 horas de juego).
    • <Bold>4 atuendos más</>
    • <Bold>1000 monedas V</>
    • 6 gestos
    • 4 papeles
    • 5 herramientas de recolección
    • 1 mascota
    • 6 planeadores
    • 7 mochilas retro
    • 3 estelas
    • 13 aerosoles
    • 2 pistas de música
    • 1 juguete
    • 23 pantallas de carga
    • ¡Y mucho más!
  ¿Lo quieres todo más rápido? ¡Puedes usar las monedas V para comprar niveles cuando quieras!',
              'tr' => 'X. Sezon: Şu andan 6 Ekim\'e kadar.
  
  <Bold>10.000 V-Papel\'in üzerinde değeri olan</> bu içerikleri hemen kap.
    • <ItemName>X Lordu</> Kıyafeti
    • <ItemName>Düz Kontak</> Kıyafeti
    • <ItemName>Serseri Grafitici</> Kıyafeti
    • <ItemName>Eski Toprak</> Planörü
    • <ItemName>İfadeli Kamuflaj</> Kaplaması
    • <ItemName>Yırtık Yıldırımı</> Dalış İzi
    • 300 V-Papel
    • <ItemName>Nihai Hesaplaşma</> Müzik Parçası
    • <Bold>%70 Bonus</> Sezonluk Maç TP\'si
    • Arkadaşların için <Bold>%80 Bonus</> Sezonluk Maç TP\'si
    • ve daha fazlası!
  
  Battle Royale oynayarak Savaş Bileti\'nin aşamasını yükselt ve <Bold>75\'ten fazla ödülü</> aç (genelde 75 ila 150 saat oynama gerektirir).
    • <Bold>4 Kıyafet</> daha
    • <Bold>1.000 V-Papel</>
    • 6 İfade
    • 4 Kaplama
    • 5 Toplama Aleti
    • 1 Sadık Dost
    • 6 Planör
    • 7 Sırt Süsü
    • 3 Dalış İzi
    • 13 Sprey
    • 2 Müzik Parçası
    • 1 Oyuncak
    • 23 Yükleme Ekranı
    • ve çok daha fazlası!
  Hepsini daha hızlı mı almak istiyorsun? V-Papel karşılığında istediğin zaman aşama açabilirsin!',
            ),
            'displayAssetPath' => '/Game/Catalog/DisplayAssets/DA_BR_Season10_BattlePassWithLevels.DA_BR_Season10_BattlePassWithLevels',
            'itemGrants' => 
            array (
            ),
          ),
          2 => 
          array (
            'offerId' => 'AF1B7AC14A5F6A9ED255B88902120757',
            'devName' => 'BR.Season10.SingleTier.01',
            'offerType' => 'StaticPrice',
            'prices' => 
            array (
              0 => 
              array (
                'currencyType' => 'MtxCurrency',
                'currencySubType' => '',
                'regularPrice' => 150,
                'dynamicRegularPrice' => -1,
                'finalPrice' => 150,
                'saleExpiration' => '9999-12-31T23:59:59.999Z',
                'basePrice' => 150,
              ),
            ),
            'categories' => 
            array (
            ),
            'dailyLimit' => -1,
            'weeklyLimit' => -1,
            'monthlyLimit' => -1,
            'refundable' => false,
            'appStoreId' => 
            array (
              0 => '',
              1 => '',
              2 => '',
              3 => '',
              4 => '',
              5 => '',
              6 => '',
              7 => '',
              8 => '',
              9 => '',
            ),
            'requirements' => 
            array (
            ),
            'metaInfo' => 
            array (
              0 => 
              array (
                'key' => 'Preroll',
                'value' => 'False',
              ),
            ),
            'catalogGroup' => '',
            'catalogGroupPriority' => 0,
            'sortPriority' => 0,
            'title' => 
            array (
              'de' => 'Battle Pass-Stufe',
              'ru' => 'Уровень боевого пропуска',
              'ko' => '배틀패스 티어',
              'zh-hant' => '英雄季卡戰階',
              'pt-br' => 'Categoria de Passe de Batalha',
              'en' => 'Battle Pass Tier',
              'it' => 'Livello Pass battaglia',
              'fr' => 'Palier du Passe de combat',
              'zh-cn' => '英雄季卡战阶',
              'es' => 'Nivel del pase de batalla',
              'ar' => 'Battle Pass Tier',
              'ja' => 'バトルパスティア',
              'pl' => 'Stopień karnetu bojowego',
              'es-419' => 'Nivel de pase de batalla',
              'tr' => 'Savaş Bileti Aşaması',
            ),
            'shortDescription' => '',
            'description' => 
            array (
              'de' => 'Hol dir jetzt tolle Belohnungen!',
              'ru' => 'Получите отличные награды!',
              'ko' => '지금 푸짐한 보상을 받아보세요!',
              'zh-hant' => '現在獲得豐厚獎勵！',
              'pt-br' => 'Ganhe recompensas ótimas agora!',
              'en' => 'Get great rewards now!',
              'it' => 'Ricevi subito magnifiche ricompense!',
              'fr' => 'Obtenez de grandes récompenses !',
              'zh-cn' => '现在获得丰厚奖励！',
              'es' => '¡Consigue recompensas increíbles!',
              'ar' => 'Get great rewards now!',
              'ja' => 'ステキな報酬を今すぐゲット！',
              'pl' => 'Zgarnij świetne nagrody już teraz!',
              'es-419' => '¡Consigue grandes recompensas ahora!',
              'tr' => 'Harika ödülleri kap!',
            ),
            'displayAssetPath' => '',
            'itemGrants' => 
            array (
            ),
          ),
        ),
      ),
    ),
  );

  echo json_encode($r, JSON_PRETTY_PRINT);
  
}

function contentpages() {
  $r=array (
    '_title' => 'Fortnite Game',
    '_activeDate' => '2017-08-30T03:20:48.050Z',
    'lastModified' => '2019-11-01T17:33:35.346Z',
    '_locale' => 'en-US',
    'loginmessage' => 
    array (
      '_title' => 'LoginMessage',
      'loginmessage' => 
      array (
        '_type' => 'CommonUI Simple Message',
        'message' => 
        array (
          '_type' => 'CommonUI Simple Message Base',
          'title' => 'Project Nocturno',
          'body' => 'Bienvenue sur Nocturno !
  
  Patch Notes:
  
  Important:
  - Ajout saison 1
  - Fix du bug de l\'inventaire
  - Fix du bus
  - Fix du loot
  - Ajout d\'un serveur pour les statistique
  - Ajout d\'un site web
  
  Discord: https://discord.gg/GrrB3s5CXC
  Tiktok: project.nocturno',
        ),
      ),
      '_activeDate' => '2017-07-19T13:14:04.490Z',
      'lastModified' => '2018-03-15T07:10:22.222Z',
      '_locale' => 'en-US',
    ),
    'subgameselectdata' => 
    array (
      'saveTheWorldUnowned' => 
      array (
        '_type' => 'CommonUI Simple Message',
        'message' => 
        array (
          'image' => '',
          'hidden' => false,
          'messagetype' => 'normal',
          '_type' => 'CommonUI Simple Message Base',
          'title' => 
          array (
            'de' => 'Koop-PvE',
            'ru' => 'Сюжетная PvE-кампания',
            'ko' => '팀과 함께 플레이하는 PvE',
            'en' => 'Co-op PvE',
            'it' => 'PvE cFFFo-op',
            'fr' => 'JcE FFFcoopératif',
            'es' => 'JcE cooperativo',
            'ar' => 'Co-op PvE',
            'ja' => '協力PvE',
            'pl' => 'Kooperacyjny tryb PvE',
            'es-419' => 'JcE cooperativo',
            'tr' => 'Oyuncularla Birlikte PvE',
          ),
          'body' => 
          array (
            'de' => 'PVE-Modus, in dem du den Sturm kooperativ bekämpfst!',
            'ru' => 'Совместное сражение с Бурей!',
            'ko' => '배틀로얄을 플레이하려면 상단의 "배틀로얄" 버튼을 클릭하세요.
  
  팀과 함께하는 PvE 모드, 폭풍과 싸우는 어드벤처!',
            'en' => 'Cooperative PvE storm-fighting adventure!',
            'it' => 'Avventura tempestosa cooperativa PvE!',
            'fr' => 'Une FFFFFFaventure en JcE coopératif pour combattre la tempête !',
            'es' => '¡Aventura cooperativa JcE de lucha contra la tormenta!',
            'ar' => 'Cooperative PvE storm-fighting adventure!',
            'ja' => 'PvE協力プレイでストームに立ち向かえ！',
            'pl' => 'Kooperacyjne zmagania PvE z burzą i pustakami!',
            'es-419' => '¡Aventura de lucha contra la tormenta en un JcE cooperativo!',
            'tr' => 'Diğer oyuncularla birlikte PvE fırtınayla savaşma macerası!',
          ),
          'spotlight' => false,
        ),
      ),
      '_title' => 'subgameselectdata',
      'battleRoyale' => 
      array (
        '_type' => 'CommonUI Simple Message',
        'message' => 
        array (
          'image' => '',
          'hidden' => false,
          'messagetype' => 'normal',
          '_type' => 'CommonUI Simple Message Base',
          'title' => 
          array (
            'de' => 'Project Nocturno',
            'ru' => 'Project Nocturno',
            'ko' => 'Project Nocturno',
            'en' => 'Project Nocturno',
            'it' => 'Project Nocturno',
            'fr' => 'Project Nocturno',
            'es' => 'Project Nocturno',
            'ar' => 'Project Nocturno',
            'ja' => 'Project Nocturno',
            'pl' => 'Project Nocturno',
            'es-419' => 'Project Nocturno',
            'tr' => 'Project Nocturno',
          ),
          'body' => 
          array (
            'de' => 'Battle Royale, 100-Spieler-PvP.
  
  Fortschritte im PvE haben keinen Einfluss auf Battle Royale.',
            'ru' => 'PvP-режим на 100 игроков «Королевская битва».
  
  Прогресс в кампании не затрагивает «Королевскую битву».',
            'ko' => '100명의 플레이어와 함께하는 PvP 모드, 배틀로얄.
  
  PvE 모드의 진행 상황은 배틀로얄 플레이에 영향을 주지 않습니다.',
            'en' => '100 Player PvP Battle Royale.
  
  PvE progress does not affect Battle Royale.',
            'it' => 'Battaglia reale PvP a 100 giocatori.
  
  I progressi in PvE non sono trasferiti nella Battaglia reale.',
            'fr' => 'Un Battle Royale à 100 en JcJ.
  
  La progression du mode JcE n\'affecte pas Battle Royale.',
            'es' => 'Battle Royale JcJ de 100 jugadores.
  
  El progreso JcE no afecta a Battle Royale.',
            'ar' => '100 Player PvP Battle Royale.
  
  PvE progress does not affect Battle Royale.',
            'ja' => '100人参加のPvPバトルロイヤル。
  
  PvEモードの進行状況はバトルロイヤルに影響しません。',
            'pl' => 'Battle Royale: PvP dla 100 graczy
  
  Postępy w kampanii nie wpływają na grę w Battle Royale.',
            'es-419' => 'Batalla campal JcJ de 100 jugadores.
  
  El progreso de JcE no afecta Batalla campal.',
            'tr' => '100 Oyunculu PvP Battle Royale. PvE ilerlemesi Battle Royale\'i etkilemez.',
          ),
          'spotlight' => false,
        ),
      ),
      'saveTheWorld' => 
      array (
        '_type' => 'CommonUI Simple Message',
        'message' => 
        array (
          'image' => '',
          'hidden' => false,
          'messagetype' => 'normal',
          '_type' => 'CommonUI Simple Message Base',
          'title' => 
          array (
            'de' => 'Funktioniert nicht :(',
            'ru' => 'Не работает :(',
            'ko' => 'Does not work :(',
            'en' => 'Does not work :(',
            'it' => 'Non funziona :(',
            'fr' => 'Ne fonctionne pas :(',
            'es' => 'No funciona :(',
            'ar' => 'Does not work :(',
            'ja' => '動作しません ：（',
            'pl' => 'Nie działa :(',
            'es-419' => 'JcE cooperativo',
            'tr' => 'Oyuncularla Birlikte PvE',
          ),
          'body' => 
          array (
            'de' => 'PVE-Modus, in dem du den Sturm kooperativ bekämpfst!',
            'ru' => 'Совместное сражение с Бурей!',
            'ko' => '배틀로얄을 플레이하려면 상단의 "배틀로얄" 버튼을 클릭하세요.
  
  팀과 함께하는 PvE 모드, 폭풍과 싸우는 어드벤처!',
            'en' => 'Cooperative PvE storm-fighting adventure!',
            'it' => 'Avventura tempestosa cooperativa PvE!',
            'fr' => 'Une aventure en JcE coopératif pour combattre la tempête !',
            'es' => '¡Aventura cooperativa JcE de lucha contra la tormenta!',
            'ar' => 'Cooperative PvE storm-fighting adventure!',
            'ja' => 'PvE協力プレイでストームに立ち向かえ！',
            'pl' => 'Kooperacyjne zmagania PvE z burzą i pustakami!',
            'es-419' => '¡Aventura de lucha contra la tormenta en un JcE cooperativo!',
            'tr' => 'Diğer oyuncularla birlikte PvE fırtınayla savaşma macerası!',
          ),
          'spotlight' => false,
        ),
      ),
      '_activeDate' => '2017-10-11T18:37:23.145Z',
      'lastModified' => '2019-05-06T12:59:15.974Z',
      '_locale' => 'en-US',
    ),
    'playlistinformation' => 
    array (
      'frontend_matchmaking_header_style' => 'None',
      '_title' => 'playlistinformation',
      'frontend_matchmaking_header_text' => '',
      'playlist_info' => 
      array (
        '_type' => 'Playlist Information',
        'playlists' => 
        array (
          0 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/LTM_50v50-1024x512-788bf1a67426f54307c4296123ac2d3ff8cc0d6c.png',
            'playlist_name' => 'Playlist_50v50',
            '_type' => 'FortPlaylistInfo',
          ),
          1 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/BR_LobbyTileArt_Solo-512x512-24446ea2a54612c5604ecf0e30475b4dec81c3bc.png',
            'playlist_name' => 'Playlist_DefaultSolo',
            'hidden' => false,
            'special_border' => 'None',
            '_type' => 'FortPlaylistInfo',
          ),
          2 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/BR_LobbyTileArt_Duo-512x512-5dea8dfae97bddcd4e204dd47bfb245d3f68fc7b.png',
            'playlist_name' => 'Playlist_DefaultDuo',
            'hidden' => false,
            'special_border' => 'None',
            '_type' => 'FortPlaylistInfo',
          ),
          3 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/BR_LobbyTileArt_Squad-512x512-5225ec6ca3265611957834c2c549754fe1778449.png',
            'playlist_name' => 'Playlist_DefaultSquad',
            'hidden' => false,
            'special_border' => 'None',
            '_type' => 'FortPlaylistInfo',
          ),
        ),
      ),
      '_noIndex' => false,
      '_activeDate' => '2018-04-25T15:05:39.956Z',
      'lastModified' => '2019-10-29T14:05:17.030Z',
      '_locale' => 'en-US',
    ),
    'playlistimages' => 
    array (
      'playlistimages' => 
      array (
        'images' => 
        array (
          0 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/BR_LTM-Tile_Playground-1024x512-53db8a4b5fb41251af279eaf923bc00ecbc17792.jpg',
            '_type' => 'PlaylistImageEntry',
            'playlistname' => 'Playlist_Playground',
          ),
          1 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/LTM_50v50-1024x512-788bf1a67426f54307c4296123ac2d3ff8cc0d6c.png',
            '_type' => 'PlaylistImageEntry',
            'playlistname' => 'Playlist_50v50',
          ),
          2 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/BR_LobbyTileArt_Solo-512x512-24446ea2a54612c5604ecf0e30475b4dec81c3bc.png',
            '_type' => 'PlaylistImageEntry',
            'playlistname' => 'Playlist_DefaultSolo',
          ),
          3 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/BR_LobbyTileArt_Duo-512x512-5dea8dfae97bddcd4e204dd47bfb245d3f68fc7b.png',
            '_type' => 'PlaylistImageEntry',
            'playlistname' => 'Playlist_DefaultDuo',
          ),
          4 => 
          array (
            'image' => 'https://cdn2.unrealengine.com/Fortnite/fortnite-game/playlisttiles/BR_LobbyTileArt_Squad-512x512-5225ec6ca3265611957834c2c549754fe1778449.png',
            '_type' => 'PlaylistImageEntry',
            'playlistname' => 'Playlist_DefaultSquad',
          ),
        ),
        '_type' => 'PlaylistImageList',
      ),
      '_title' => 'playlistimages',
      '_activeDate' => '2018-08-07T02:14:56.108Z',
      'lastModified' => '2018-08-28T15:50:37.174Z',
      '_locale' => 'en-US',
    ),
    'tournamentinformation' => 
    array (
      'tournament_info' => 
      array (
        'tournaments' => 
        array (
          0 => 
          array (
            'title_color' => 'FFFFFF',
            'loading_screen_image' => 'https://cdn.discordapp.com/attachments/735984479906037845/1019889203942801448/unknown.png',
            'background_text_color' => '1B1B1B',
            'background_right_color' => 'DD091A',
            'poster_back_image' => 'https://cdn.discordapp.com/attachments/735984479906037845/1019889203942801448/unknown.png',
            '_type' => 'Tournament Display Info',
            'pin_earned_text' => 'Nocturno is the winner!',
            'tournament_display_id' => 's11_switchcup',
            'highlight_color' => 'FFFFFF',
            'schedule_info' => 'November 2nd & 3rd: 2pm - 5pm JST',
            'primary_color' => 'FFFFFF',
            'flavor_description' => 'cool',
            'poster_front_image' => 'https://cdn.discordapp.com/attachments/735984479906037845/1019889203942801448/unknown.png',
            'short_format_title' => 'Event Sessions',
            'title_line_2' => 'boomer',
            'title_line_1' => 'Solo',
            'shadow_color' => '1B1B1B',
            'details_description' => 'ok',
            'background_left_color' => 'F81B2D',
            'long_format_title' => 'nice',
            'poster_fade_color' => 'DD091A',
            'secondary_color' => '1B1B1B',
            'playlist_tile_image' => 'https://cdn.discordapp.com/attachments/735984479906037845/1019889203942801448/unknown.png',
            'base_color' => 'FFFFFF',
          ),
        ),
        '_type' => 'Tournaments Info',
      ),
      '_title' => 'tournamentinformation',
      '_noIndex' => false,
      '_activeDate' => '2018-11-13T22:32:47.734Z',
      'lastModified' => '2019-11-01T17:33:35.346Z',
      '_locale' => 'en-US',
    ),
    'emergencynotice' => 
    array (
      'news' => 
      array (
        '_type' => 'Battle Royale News',
        'messages' => 
        array (
          0 => 
          array (
            'hidden' => true,
            '_type' => 'CommonUI Simple Message Base',
            'title' => 'Project Nocturno',
            'body' => 'Maintenance prévue de 20h jusqu\'à 10h.
  Pour en savoir plus tout est sur le serveur discord.',
            'spotlight' => true,
          ),
        ),
      ),
    ),
    'emergencynoticev2' => 
    array (
      'jcr:isCheckedOut' => true,
      '_title' => 'emergencynoticev2',
      '_noIndex' => false,
      'jcr:baseVersion' => 'a7ca237317f1e771e921e2-7f15-4485-b2e2-553b809fa363',
      'emergencynotices' => 
      array (
        '_type' => 'Emergency Notices',
        'emergencynotices' => 
        array (
          0 => 
          array (
            'gamemodes' => 
            array (
            ),
            'hidden' => false,
            '_type' => 'CommonUI Emergency Notice Base',
            'title' => 'Project Nocturno',
            'body' => 'L\'API du Project Nocturno est en dev.
  By Heliato & 4lxprime.',
          ),
        ),
      ),
      '_activeDate' => '2018-08-06T19:00:26.217Z',
      'lastModified' => '2021-12-01T15:55:56.012Z',
      '_locale' => 'en-US',
    ),
    'subgameinfo' => 
    array (
      'battleroyale' => 
      array (
        'image' => '',
        'color' => '1164c1',
        '_type' => 'Subgame Info',
        'description' => 
        array (
          'de' => '100 Spieler PvP',
          'ru' => 'PVP-режим на 100 игроков',
          'ko' => '100인 플레이어 PvP',
          'en' => '100 Player PvP',
          'it' => 'PvP a 100 giocatori',
          'fr' => 'JcJ à 100 joueurs',
          'es' => 'JcJ de 100 jugadores',
          'ar' => '100 لاعب ضد لاعب',
          'ja' => 'プレイヤー100人によるPvP',
          'pl' => 'PvP dla 100 graczy',
          'es-419' => 'JcJ de 100 jugadores',
          'tr' => '100 Oyunculu PVP',
        ),
        'subgame' => 'battleroyale',
        'standardMessageLine2' => '',
        'title' => 
        array (
          'de' => 'Battle Royale',
          'ru' => 'Battle Royale',
          'ko' => 'Battle Royale',
          'en' => 'Battle Royale',
          'it' => 'Battaglia reale',
          'fr' => 'Battle Royale',
          'es' => 'Battle Royale',
          'ar' => 'Battle Royale',
          'ja' => 'Battle Royale',
          'pl' => 'Battle Royale',
          'es-419' => 'Batalla campal',
          'tr' => 'Battle Royale',
        ),
        'standardMessageLine1' => '',
      ),
      'savetheworld' => 
      array (
        'image' => '',
        'color' => '7615E9FF',
        'specialMessage' => '',
        '_type' => 'Subgame Info',
        'description' => 
        array (
          'de' => 'Kooperatives PvE-Abenteuer!',
          'ru' => 'Совместное сражение с Бурей!',
          'ko' => '협동 PvE 어드벤처!',
          'en' => 'Cooperative PvE Adventure',
          'it' => 'Avventura cooperativa PvE!',
          'fr' => 'Aventure en JcE coopératif !',
          'es' => '¡Aventura cooperativa JcE!',
          'ar' => 'مشروع تعاوني للاعب ضد البيئة!',
          'ja' => '協力プレイが楽しめるPvE！',
          'pl' => 'Kooperacyjne zmagania PvE z pustakami!',
          'es-419' => '¡Aventura de JcE cooperativa!',
          'tr' => 'Diğer oyuncularla birlikte PvE macerası!',
        ),
        'subgame' => 'savetheworld',
        'title' => 
        array (
          'de' => 'Rette die Welt',
          'ru' => 'Сражениес Бурей',
          'ko' => '세이브 더 월드',
          'en' => 'Save The World',
          'it' => 'Salva il mondo',
          'fr' => 'Sauver le monde',
          'es' => 'Salvar elmundo',
          'ar' => 'Save The World',
          'ja' => '世界を救え',
          'pl' => 'Ratowanie Świata',
          'es-419' => 'Salva el mundo',
          'tr' => 'Dünyayı Kurtar',
        ),
      ),
      '_title' => 'SubgameInfo',
      '_noIndex' => false,
      'creative' => 
      array (
        'image' => '',
        'color' => '13BDA1FF',
        '_type' => 'Subgame Info',
        'description' => 
        array (
          'de' => 'Deine Inseln. Deine Freunde. Deine Regeln.',
          'ru' => 'Ваши острова. Ваши друзья. Ваши правила.',
          'ko' => '나의 섬. 나의 친구. 나의 규칙.',
          'en' => 'Your Islands. Your Friends. Your Rules.',
          'it' => 'Le tue isole. I tuoi amici. Le tue regole.',
          'fr' => 'Vos îles, vos amis, vos règles.',
          'es' => 'Tus islas. Tus amigos. Tus reglas.',
          'ar' => 'جزرك. أصدقاؤك. قواعدك.',
          'ja' => '自分の島。自分のフレンド。自分のルール。',
          'pl' => 'Twoje wyspa, twoi znajomi, twoje zasady.',
          'es-419' => 'Tus islas. Tus amigos. Tus reglas.',
          'tr' => 'Senin Adaların. Senin Dostların. Senin Kuralların.',
        ),
        'subgame' => 'creative',
        'title' => 
        array (
          'de' => 'Kreativmodus',
          'ru' => 'Творческийрежим',
          'ko' => '포크리',
          'en' => 'Creative',
          'it' => 'Modalità creativa',
          'fr' => 'Mode Créatif',
          'es' => 'Modo Creativo',
          'ar' => 'Creative',
          'ja' => 'クリエイティブ',
          'pl' => 'Tryb kreatywny',
          'es-419' => 'Modo Creativo',
          'tr' => 'Kreatif',
        ),
        'standardMessageLine1' => '',
      ),
      '_activeDate' => '2019-05-02T16:48:47.429Z',
      'lastModified' => '2019-10-29T12:44:06.577Z',
      '_locale' => 'en-US',
    ),
    'lobby' => 
    array (
      'backgroundimage' => 'https://fortnite-public-service-prod11.ol.epicgames.com/images/seasonx.png',
      'stage' => 'seasonx',
      '_title' => 'lobby',
      '_activeDate' => '2019-05-31T21:24:39.892Z',
      'lastModified' => '2019-07-31T21:24:17.119Z',
      '_locale' => 'en-US',
    ),
    'battleroyalenews' => 
    array (
      'news' => 
      array (
        '_type' => 'Battle Royale News',
        'motds' => 
        array (
          0 => 
          array (
            'entryType' => 'Website',
            'image' => 'https://fortnite-public-service-prod11.ol.epicgames.com/images/motd.png',
            'tileImage' => 'https://fortnite-public-service-prod11.ol.epicgames.com/images/motd-s.png',
            'videoMute' => false,
            'hidden' => false,
            'tabTitleOverride' => 'NocturnoServer',
            '_type' => 'CommonUI Simple Message MOTD',
            'title' => 
            array (
              'ar' => 'مرحبًا بك في NocturnoServer!',
              'en' => 'Welcome to NocturnoServer!',
              'de' => 'Willkommen bei NocturnoServer!',
              'es' => '¡Bienvenidos a NocturnoServer!',
              'es-419' => '¡Bienvenidos a NocturnoServer!',
              'fr' => 'Bienvenue sur NocturnoServer !',
              'it' => 'Benvenuto in NocturnoServer!',
              'ja' => 'NocturnoServerへようこそ！',
              'ko' => 'NocturnoServer에 오신 것을 환영합니다!',
              'pl' => 'Witaj w NocturnoServerze!',
              'pt-BR' => 'Bem-vindo ao NocturnoServer!',
              'ru' => 'Добро пожаловать в NocturnoServer!',
              'tr' => 'LavinServer\'a Hoş Geldiniz!',
            ),
            'body' => 
            array (
              'ar' => 'استمتع بتجربة لعب استثنائية!',
              'en' => 'Have a phenomenal gaming experience!',
              'de' => 'Wünsche allen ein wunderbares Spielerlebnis!',
              'es' => '¡Que disfrutes de tu experiencia de videojuegos!',
              'es-419' => '¡Ten una experiencia de juego espectacular!',
              'fr' => 'Un bon jeu à toutes et à tous !',
              'it' => 'Ti auguriamo un\'esperienza di gioco fenomenale!',
              'ja' => '驚きの体験をしよう！',
              'ko' => '게임에서 환상적인 경험을 해보세요!',
              'pl' => 'Życzymy fenomenalnej gry!',
              'pt-BR' => 'Tenha uma experiência de jogo fenomenal!',
              'ru' => 'Желаю невероятно приятной игры!',
              'tr' => 'Muhteşem bir oyun deneyimi yaşamanı dileriz!',
            ),
            'offerAction' => 'ShowOfferDetails',
            'videoLoop' => false,
            'videoStreamingEnabled' => false,
            'sortingPriority' => 90,
            'websiteButtonText' => 'Discord',
            'websiteURL' => 'https://discord.gg/KJ8UaHZ',
            'id' => '61fb3dd8-f23d-45cc-9058-058ab223ba5c',
            'videoAutoplay' => false,
            'videoFullscreen' => false,
            'spotlight' => false,
          ),
        ),
        'messages' => 
        array (
          0 => 
          array (
            'image' => 'https://cdn.discordapp.com/attachments/735984479906037845/1020084668512620544/unknown_69_1.png',
            'hidden' => false,
            '_type' => 'CommonUI Simple Message Base',
            'adspace' => 'Bienvenue !',
            'title' => 'Bienvenue sur Fortnite saison 1',
            'body' => 'https://discord.gg/GrrB3s5CXC',
            'spotlight' => false,
          ),
          1 => 
          array (
            'image' => 'https://cdn.discordapp.com/attachments/735984479906037845/1020085432660271166/channels4_profile_1_1.jpg',
            'hidden' => false,
            '_type' => 'CommonUI Simple Message Base',
            'adspace' => 'En dev !',
            'title' => 'Le serveur est en developement',
            'body' => 'By Heliato & 4lxprime',
            'spotlight' => false,
          ),
        ),
      ),
      '_title' => 'battleroyalenews',
      'header' => '',
      'style' => 'SpecialEvent',
      '_noIndex' => false,
      'alwaysShow' => false,
      '_activeDate' => '2018-08-17T16:00:00.000Z',
      'lastModified' => '2019-10-31T20:29:39.334Z',
      '_locale' => 'en-US',
    ),
    'battleroyalenewsv2' => 
    array (
      'news' => 
      array (
        'motds' => 
        array (
          0 => 
          array (
            'entryType' => 'Website',
            'image' => 'https://fortnite-public-service-prod11.ol.epicgames.com/images/motd.png',
            'tileImage' => 'https://fortnite-public-service-prod11.ol.epicgames.com/images/motd-s.png',
            'videoMute' => false,
            'hidden' => false,
            'tabTitleOverride' => 'NocturnoServer',
            '_type' => 'CommonUI Simple Message MOTD',
            'title' => 
            array (
              'ar' => 'مرحبًا بك في NocturnoServer!',
              'en' => 'Welcome to NocturnoServer!',
              'de' => 'Willkommen bei NocturnoServer!',
              'es' => '¡Bienvenidos a NocturnoServer!',
              'es-419' => '¡Bienvenidos a NocturnoServer!',
              'fr' => 'Bienvenue sur NocturnoServer !',
              'it' => 'Benvenuto in NocturnoServer!',
              'ja' => 'NocturnoServerへようこそ！',
              'ko' => 'NocturnoServer에 오신 것을 환영합니다!',
              'pl' => 'Witaj w NocturnoServerze!',
              'pt-BR' => 'Bem-vindo ao NocturnoServer!',
              'ru' => 'Добро пожаловать в NocturnoServer!',
              'tr' => 'LavinServer\'a Hoş Geldiniz!',
            ),
            'body' => 
            array (
              'ar' => 'استمتع بتجربة لعب استثنائية!',
              'en' => 'Have a phenomenal gaming experience!',
              'de' => 'Wünsche allen ein wunderbares Spielerlebnis!',
              'es' => '¡Que disfrutes de tu experiencia de videojuegos!',
              'es-419' => '¡Ten una experiencia de juego espectacular!',
              'fr' => 'Un bon jeu à toutes et à tous !',
              'it' => 'Ti auguriamo un\'esperienza di gioco fenomenale!',
              'ja' => '驚きの体験をしよう！',
              'ko' => '게임에서 환상적인 경험을 해보세요!',
              'pl' => 'Życzymy fenomenalnej gry!',
              'pt-BR' => 'Tenha uma experiência de jogo fenomenal!',
              'ru' => 'Желаю невероятно приятной игры!',
              'tr' => 'Muhteşem bir oyun deneyimi yaşamanı dileriz!',
            ),
            'offerAction' => 'ShowOfferDetails',
            'videoLoop' => false,
            'videoStreamingEnabled' => false,
            'sortingPriority' => 90,
            'websiteButtonText' => 'Discord',
            'websiteURL' => 'https://discord.gg/KJ8UaHZ',
            'id' => '61fb3dd8-f23d-45cc-9058-058ab223ba5c',
            'videoAutoplay' => false,
            'videoFullscreen' => false,
            'spotlight' => false,
          ),
        ),
        '_type' => 'Battle Royale News v2',
      ),
      'jcr:isCheckedOut' => true,
      '_title' => 'battleroyalenewsv2',
      '_noIndex' => false,
      'alwaysShow' => false,
      'jcr:baseVersion' => 'a7ca237317f1e7721def6e-9f96-4c43-b429-30c794953b04',
      '_activeDate' => '2020-01-21T14:00:00.000Z',
      'lastModified' => '2021-09-14T16:31:00.888Z',
      '_locale' => 'en-US',
    ),
    'dynamicbackgrounds' => 
    array (
      'backgrounds' => 
      array (
        'backgrounds' => 
        array (
          0 => 
          array (
            'stage' => 'fortnitemares',
            '_type' => 'DynamicBackground',
            'key' => 'lobby',
          ),
          1 => 
          array (
            'stage' => 'fortnitemares',
            '_type' => 'DynamicBackground',
            'key' => 'vault',
          ),
        ),
        '_type' => 'DynamicBackgroundList',
      ),
      '_title' => 'dynamicbackgrounds',
      '_noIndex' => false,
      '_activeDate' => '2019-08-21T15:59:59.342Z',
      'lastModified' => '2019-10-29T13:07:27.936Z',
      '_locale' => 'en-US',
    ),
  );

  echo json_encode($r, JSON_PRETTY_PRINT);
  
}

function keychain() {
  $r=[
    "46159C748694298198A52DC07476FDA3:4CLHOBqSrmS1RkG/SxZYi8Rc0zCmAKxXIBMMUHDl2ag=",
    "8DA867A3B1F0E3A0985B0AB812C3582A:vS8S10ETj2TxdtD57p/iNINbMj4mfumCT6q3eV/jhdU=",
    "D938886074C83017118B4484AECE11AB:wjHAHm00Vg6n2x5LU91ap0+SFX5ZXXBmax1LyX8Aips=:BID_737_Alchemy_1WW0D",
    "024641850664615E97BE1533A4F3365E:Ut4/ICU0gseFN8MGgYyUTmWidRtj9yeo/NNBp4y/7hs=",
    "688022C4193EA6D9DF1EDC7F6CF826DA:lOR338TzQ75G7R81RCKTdjYmYCjhSKJIB+ScPYanNow=",
    "46FC5EBAD39CE53EFB215A2E05A915FC:H3gtdkEzT3Dk8vkwTTZE9oUDoJEy6vmfQj1jDo453gY=:Glider_ID_140_ShatterFly",
    "1F5D9EEE331B5E84D6A7AEFF4E80768E:2X6Gzwp+PQOeejP7HwJp98aO9pTVDnX/t5pe5Wa4WyE=",
    "5776BD1A9BFC4EEEB7DD1FCA71B9C39C:jkYOI3VSLqXBCMYyxpfl/soGCBdplmqs8C2AOg1pcGU=",
    "8F6ACF5D43BC4BC272D72EBC072BDB4F:rsT5K8O82gjB/BWAR7zl6cBstk0xxiu/E0AK/RQNUjE=:CID_246_Athena_Commando_F_Grave",
    "4A8216304A1A18CB9583BC8CFF99EE26:QF3nHCFt1vhELoU4q1VKTmpxnk20c2iAiBEBzlbzQAY=:CID_184_Athena_Commando_M_DurrburgerWorker",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_949_Athena_Commando_M_Football20Referee_C_SMMEY",
    "F2A5D91602A7C130FA1FB30A050E98A2:MrhEh24cVikkhJJUX/LBAaNtgYV20VBiR5oaMDJ2nA8=:BID_946_Galactic_S1CVQ",
    "30A11EE8EB62BEFD4E9B09611DB13857:YVeVPXcP7UoJTp71ZXpGNdPVzmjnRyymcUpsNWYXfRs=:BID_508_DonutDish",
    "4C3B1FC20956AE8C3C29A85446D013F4:dVksVi55yMPvgmuA2rjvlyDlySrQOK8wmH3aa69wtZo=:BID_A_003_Ultralight",
    "D85DFC0115FC3C75A6AD9C5D15B0DBF4:KFp5kuqdJIex+SS95mCy4nETnpzlaY8UHe8X7BSjGxY=:Wrap_080_Blackout1",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:EID_BasketballDribble_E6OJV",
    "010E6ACF85E4A58BF6F551EFE7B85F61:DwCIH5Dw/1wdiS6gFGmWe4HUgD9kMOEzjbzM/1QshM4=:Pickaxe_ID_178_SpeedyMidnight",
    "95C6C2B37E1D15D60BB5C20D9D47BA31:exdH0xe2v+2t1wyoXpZGLX+iGDIdRxcQ6BG9iqi07Lo=:EID_Noble",
    "A92DE306E5174C82739D774151D7B661:RF9sTh7l2tp+ypCb/Lp3WeMfBExvk2LSUbim04xsCJo=",
    "8335E3DF8B0DFBCB0C05EFB5FF1B8A81:shx/UPd2PJpGZtpddRmoS7RosbEO0MlsaNb+9aaQR9g=:Pickaxe_ID_204_Miner",
    "DC487286E8C1CD5FE18AC3FE76034EF2:3h9IwK2qQP8PHVuO1aZI1C34JrJxKBnXJOFcSDSj99M=:CID_478_Athena_Commando_F_WorldCup",
    "8A6DABC9AF8B5FE521D365DB605D0AE0:T721SqBTncYsd8Gej01RnLX6sEaCgJoILnRauHaJz+g=:BID_284_NeonLines",
    "5E15C5486CE8E539552D4D3E7682F9E2:+L/tTz+woDFZJEvtxfq8m8tNI1R72sYK7rnYr7sHTis=:EID_TeamRobot",
    "E47EFA3166A5D7B35CEC27B19AC66AE5:JURSqAHhHK6YqLP5rKhCO+SQ2oql4NqJaoaeNGtsrM8=:LSID_325_RiftTourMKTG1_18M49",
    "772E01C212E9A77A501AF954ADA90B09:nQ4i6bbmbGMzcq8iyjoM/BGUbX2DSIJRAZ96/qaOf/Y=:BID_945_SleekGlasses_GKUD9",
    "5A33986E8C23E664BD8A70D41697A93F:nFqFG2z7mnQhf4Q3iR6zQ2eWykiuwy0af+ga9QWnU6o=",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:Pickaxe_ID_788_LyricalMale",
    "0FA46244428655D55790A980B59745AD:fEzJj2anX6D4HyOhaXyNar9oFa+L2/ob/RIXLnxWc7Y=:CID_328_Athena_Commando_F_Tennis",
    "BA6DF4F82C5CAB3CE1C51156BFCACE71:SDOlhnlP1SENGT+SrYUqeGIz0TkgoM7dQjfmfxegb1o=:MusicPack_030_BlackMonday_X91ZH",
    "4009CB877085F3B3B0D76A686465A140:gMLJXUbFcIrqqUlAuoMI1b27KdWHBVJJeJWdYV1Iiro=:EID_KeplerFemale_C98JD",
    "F73156B85666DAE88D9359504D1F7C85:bOvve/ewsWhDoK6S3QIpVI7QwUel31Vv5aS4tvdUVaY=",
    "6DD6F574BA76BD6B68E14FF19181F2B6:Z/OnCtvolWJSaChHeIIVFXB8fptk8QBW8JQD1Gk2w+Y=:EID_Shaka",
    "D47524F6F863DCCBB2455472F0FEFE2C:cRoiHZin2Lnv6yQ4Zt2WoIpQc1ZjLbfl1Ogid24ydZM=:CID_A_416_Athena_Commando_M_Armadillo",
    "F60CFFFA32CF6A877B50DA7F0A88326E:OWIopbB4fxaobofPI9lF9hn6BPG9NVLp4Od61uQppfo=:CID_392_Athena_Commando_F_BountyBunny",
    "6CED8B5F648ED1ACCC8F1194901775AF:qjfCT39FVniEjPj+CvZu5Qz8XHHtdnH8kCsV3P1OaJw=:BID_252_EvilBunny",
    "6CFF02B6F01FBC306D428E8EE2CA6232:1BaXCMF6dJeORZditLbWRLFKVlvYZerZdvifZuvNTfk=",
    "E8585F83E40CD4CF0272EA6012055A97:4LrXtLEBhL5JquAu4/kq1Dghb4/355YROt3ciXg+ysE=:BID_988_Rumble",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:Pickaxe_ID_734_SlitherMale_762K0",
    "216D955070ADAF10973BD156897472C3:MjQh55OvnJCoVMQzMU4C/1NF3FWiXDXnJ6G/EcHfUzo=:EID_AshtonBoardwalk",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_081_Athena_Commando_M_Hardwood_B_JRP29",
    "FD0C3696948675DC3C2CBF5098D57D0D:rBWyTh/AVyZxi2oiQxM/OeD/HYZOSdVidEQeKoowV6U=:BID_744_CavernMale_CF6JE",
    "25E4BA752FB1328DA3E5EDB5FFAA47C3:Mrh9sFIpmcD6xhM2zQjHjqzV5QuJBXS29x0fS5IFcFk=:BID_789_CavernArmored",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:EID_Galileo4_PXPE0",
    "C779C5126616BE8EA5FF851D2FF1FF34:uK97yLbZmBvrWhlMlQmYfVWq2l4mRy/CEm5H/zczFDI=",
    "772E01C212E9A77A501AF954ADA90B09:nQ4i6bbmbGMzcq8iyjoM/BGUbX2DSIJRAZ96/qaOf/Y=:EID_Sleek_S20CU",
    "7313591AB9F0A7E46AB016065DE8F65A:NAL0bLW1p+ceLF4lhxfm1vQPaMlv8eNPP6tTizTZEN0=:CID_398_Athena_Commando_M_TreasureHunterFashion",
    "DC060EA83FE6F9729B19150E40C7987E:zW3d3QhtvhE+q3x/P7/BA9JvyoruVmeACdKt6RPxyLY=:Glider_ID_357_JourneyFemale",
    "929B82B3454DF80CC45B11A55400B6E7:jl/KsmshfBxKKnPDHyHNTHOzTE3buCIrBpSUpXJQdL4=:BID_180_IceMaiden",
    "6BE73A630C01192C39807CEDA006C77C:3MYDxjacnNgSQwxc68DknO3e6TKXSw4tG5TVdSxGdFE=:Pickaxe_ID_327_GalileoKayak_50NFG",
    "AFCCB7C08EC6957EEDDAAD676C3D3513:MuovEXob241ie6/RP76ImUk+MExLdl+bszvxCHNtg0U=",
    "9261CD0F921EAA3CD6AA8C0716FB042B:W+yzeWWxWnA530lwV8nLi2BE+TD5MCXS11th7UphmPQ=:Pickaxe_ID_542_TyphoonFemale1H_CTEVQ",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:Glider_ID_153_Banner",
    "FD0C3696948675DC3C2CBF5098D57D0D:rBWyTh/AVyZxi2oiQxM/OeD/HYZOSdVidEQeKoowV6U=:Pickaxe_ID_589_CavernMale_9U0A8",
    "001B8CDAE8386ACB5DFE26FA59C10B40:XA9kqeHyWLK/xsRzYLCkooN/dBRNTyjy5sw9Jv+8nRs=",
    "8AE56A5795250C959CD4357AF32DA563:GL9+gTLkh5vnyzImLDdxGYFksrHsmmJSUfZB9mP9fdM=",
    "4C3B1FC20956AE8C3C29A85446D013F4:dVksVi55yMPvgmuA2rjvlyDlySrQOK8wmH3aa69wtZo=:Pickaxe_ID_800_UltralightFemale",
    "35C2B057E5168DCA74B6F1DDAC745E60:73haJlY3S0TVmH0ELxyw6p5FzFRrITWqOmobH9F2Mq8=:BID_937_KeenMale_YT098",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:Wrap_395_TextileBlack_DBVU2",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:BID_953_Gimmick_1I059",
    "4C8D53A32D85124D08A3DCE6D3474A30:gam5sVciLPzKr+wmWOoctLo5HFqBvBLKKcxh6ZV1kn0=:Pickaxe_ID_532_WombatFemale_CWE2D",
    "AC22C5B2B654FE15BDCC8B664D033140:zE2ddgoXrJ7X0UEkphUtys0CeoTzIDpAZ58beqOkx4M=:CID_A_232_Athena_Commando_F_CritterStreak_YILHR",
    "30A1FD89B2D3C155DAF14852A39BA97F:C0IwuJFw9v06OF8XthOhzUd3nHOTCII1gmx/7eepmDo=:Pickaxe_ID_747_ZestMale_3KAEG",
    "010E6ACF85E4A58BF6F551EFE7B85F61:DwCIH5Dw/1wdiS6gFGmWe4HUgD9kMOEzjbzM/1QshM4=:Glider_ID_131_SpeedyMidnight",
    "7FA066BD68EDBE54C44CEAF5FDE591AA:MqrhrL7xbe11CZPwz1pJTx8M8yUHGe/VHL29VKlKVKg=",
    "A0926AD8C6EDE29250AC4A0A93156E7B:keN/yZ7qnvcPZeIflsked9TAT867gbPgmnG1QdlSn3E=:Pickaxe_ID_382_Donut1H",
    "C2216794035D5FC95DCC07FA72E1EC86:4CS9WyhB+tpbl/w4bd+9cnjWZTf0NCO8zl1/6TmIQeM=:EID_HNYGoodRiddance",
    "8AB2A1D47937F30D49879F4043164045:Mwur5341qGGuZkJb6aGqo7oPYGS5RIaLu3lgf5n6eRg=",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:EID_FootballTD_U2HZI",
    "D49757E2D55451A0D5B341906FE2ABE4:PWMwnjgi/wUDV+yxg02QsU33jA529fxVTRHyqnkv21c=:Glider_ID_142_AshtonSaltLake",
    "0C2DFF3432352A23684E05B0794DFFC7:FG55cmgdBnszsr5pS0aBC44NVl7OyI+AuOXxALyaNKA=",
    "2D24182706636A7BD3E96AD37605BAD6:jEZJE+EAU7VDo6p6Y84e4+p3AHxYBWin144H4MhzaSQ=:Pickaxe_ID_427_Seaweed1H_CZ9HA",
    "4E7938F1FAC98BDF378823116712AC7A:jbZVgprILTQomUdGeJF0PsAFAJxsSCs5cKcXweZMAg0=:EID_Tar_S9YVE",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_299_Athena_Commando_M_Slither_B_1X28D",
    "2FE8DBD09F14AAF7D195AA73B9613792:KwIehLEKaCSJb5X/WcQ9IULKkz3G3M9f9Z5Jgi9hYUU=:Pickaxe_ID_297_FlowerSkeletonFemale1H",
    "8B9DC1A32A4081596F0AE60926CF6846:4O/n/4TAJpnQ3BvcadiKLHRNSmZQQbr+15RSrDHnrQ4=",
    "F395571A36D2BD888861E61EEBD45AF8:D/35GPTIOKbdfmpxRJmHTkjNXcWv+XdSmTxQt6z1hvI=:Pickaxe_ID_554_SkirmishMale_ML78Q",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_353_Athena_Commando_F_TreyCozy_E_JRL60",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:EID_Grasshopper_8D51K",
    "E0AEF4894E1283946745F7902F7E105A:7MXKJEs903nNbT1oFzykxoHbQNDnOBm6yfadj+mtBDA=:BID_954_Rover_0FV73",
    "ED088B11311A599D6225CE85545F019A:1NMRh4JMXRL9XW8Kb6zo4/F10dwLJC1+kPm6D6DudCE=:Pickaxe_ID_653_LavishMale1H_SWKJB",
    "A0926AD8C6EDE29250AC4A0A93156E7B:keN/yZ7qnvcPZeIflsked9TAT867gbPgmnG1QdlSn3E=:Glider_ID_206_Donut",
    "566C4D92AF66F45DF5E2D7EB43CC27AE:EuAYwU5tQBXzGoSj5BMc7S5yFfe9wZ2qrzx/hIHpnqw=",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:LSID_428_Lyrical",
    "163D68B009421CA82956BDD63659F7C0:SAE6Yruow/8IPkoOuzYEnjJFyvBuwLNI11z9/5EfyL0=:EID_TwistWasp_T2I4J",
    "74AF07F9A2908BB2C32C9B07BC998560:V0Oqo/JGdPq3K1fX3JQRzwjCQMK7bV4QoyqQQFsIf0k=:BID_302_Hairy",
    "BA6DF4F82C5CAB3CE1C51156BFCACE71:SDOlhnlP1SENGT+SrYUqeGIz0TkgoM7dQjfmfxegb1o=:BID_361_BlackMondayFemale_R0P2N",
    "5869B4D27CF6766E4047DB0636CB6D72:bFnq5n5S+PRZZFp/dGhAmy63liDVz7wufMqMm65B0FE=",
    "5AD068EB1D56D87706E44EEB3198CF1B:o9Gp08KD/vgq3RTrUbfGJk7rlfUqZMxoRKPiwvdVkXY=:EID_LogarithmWhoa_T3PF9",
    "D8FDE5644FE474C7C3D476AA18426FEB:orzs/Wp9XxE5vpybtd0tOxX6hrMyZZheFZusAw1c+6A=:BID_126_DarkBomber",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:BID_635_York_Male",
    "E36F7DC3B2ECE987FC956C3CF7E71F21:+Y1iPDRR7adeEjebuo6DzBiHkgK0c4ZOwgmrnYYx43w=",
    "28CBBF705C9DB5A88BEC70DAA005E02E:FvtzBBvDkyj8PRLW76169bMFvg65VojYrSmkjUAi4Bc=:Pickaxe_ID_259_CupidFemale1H",
    "210726DF9DCD78AD95B4D407D5D9157B:cXzvTrgNBBmsa8jR8E4q9NFBasv/zdQSSPQmnKznkJE=:EID_SecurityGuard",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_236_Athena_Commando_M_Grasshopper_C_47TZ8",
    "87F01091E4DA4FE3FFC9AD92A20A8DCE:p+5QvlQEV5QW2QQrIWrDnnthhNN9V0wXK+Zdmiw71u0=",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_A_001_Athena_Commando_F_GlobalFB_HDL2W",
    "88FA70760D757D80F661FA53B4762EC2:7OtV76cpyOq9dNeM5PVD8TOdRcPx1K3weEPXzlCugu0=:BID_877_BistroAstronaut_LWL45",
    "4009CB877085F3B3B0D76A686465A140:gMLJXUbFcIrqqUlAuoMI1b27KdWHBVJJeJWdYV1Iiro=:BID_704_KeplerFemale_C0L25",
    "D7EDE7B4CE393235BF4EB8779C55D5AE:tvYJfExMmwMpbWXSe8bxfGkpl1wcJv4B/RBjd8qWcZ4=:BID_928_OrbitTeal_R54N6",
    "7DA161D7F5AB6AF6582AE0A40C803E35:LSL2m9TCTyHRII5NJx3KmYr/Zfohz2nWUbRUKPqAkOU=",
    "F6838AF4144E8386A184FBB0823C15D0:IjzqnnHjZ+r6WC4He/JawOyR7LxeMbm5880cDGDr2eU=:BID_229_LuckyRiderMale",
    "80FC6D214CD513415CB0A54044683293:fXY1Xojrg1HpH6ZF0xNrhF9XZKS15GmaBidF9kSAbME=",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:BID_289_Banner",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_996_Athena_Commando_M_GlobalFB_B_RVED4",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=",
    "EBA3BC7F0023BE91CE5EFB7E1BC001A8:MdKbawNIe4qCuGaB4q7+4cy8keyDnJnxZLa7HLC0W4A=:EID_Feral",
    "C5188047D9661347FC4483CCB04ACD4C:TlesZ5LgoEoJqkJaz7N2QB43zNWIJdOpx8rOpsbGC48=",
    "C76299772B1BE272260BF3396F83FC1E:uiBDMtwYhdxktbqTrhYkzEZErlBp5gBtkLM+QFDouT4=:Pickaxe_ID_668_ClashVMale1H_5TA18",
    "C76299772B1BE272260BF3396F83FC1E:uiBDMtwYhdxktbqTrhYkzEZErlBp5gBtkLM+QFDouT4=:Glider_ID_317_VertigoMale_E3F81",
    "E0FB7B394449CE6450EA90C93D710EB8:NrXwNX6lKuu/kyQuvE74+6Uo04FODoV4ZqxToj/jS6I=:Pickaxe_ID_230_Drift1H",
    "9078B5331B187C32C649D4B1E5530EEC:l1U0jw2fdShRIHGNl1NYmG8YDAJEUSIfhI46nJgSt30=",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_911_Athena_Commando_F_York_B",
    "1655272875DB718493BB6B09032657D7:xQLpNTDeYJCcQOUQS2ICyfByvhPU3nC5cfJRbPSugdY=:EID_Survivorsault_NJ7WC",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:Pickaxe_ID_675_TextilePupMale_96JZF",
    "545B9777127F4BE242F802C627356B7E:RNI/KvLEXcGoGnk3/AKaYbyJmXMtQl9Zmvl8ErePB4g=:Pickaxe_ID_691_RelishMale_FVCA7",
    "C7623A35411F3D5FBDE2688C7E4A69EB:qAi49mUKsB2dbfbtJWDf3yO2DfRStA+Ed9XgDjC8Zaw=:Glider_ID_109_StreetGoth",
    "4755D9C0E2D1DE1C09B77DEA8B830471:9tUO5yVhvp+/sp7icZaEDw05nMAdS6bYAWYyfQNsxBc=:Pickaxe_ID_387_DonutCup",
    "D938886074C83017118B4484AECE11AB:wjHAHm00Vg6n2x5LU91ap0+SFX5ZXXBmax1LyX8Aips=:LSID_294_Alchemy_09U3R",
    "545B9777127F4BE242F802C627356B7E:RNI/KvLEXcGoGnk3/AKaYbyJmXMtQl9Zmvl8ErePB4g=:Pickaxe_ID_690_RelishFemale_DC74M",
    "7F0F5EB44D49E7563DD5A196121D49E1:CBIvm8gTJLCz6sD05GKbQo6u/Nk4Poni/7wlp724KWc=:BID_146_AnimalJacketsFemale",
    "D14FDB2BB2FB7746797F25470913BFF1:CQDgIxcNnAoUboQnjafZAYvV7UqX+NefGTXFd3m+oFc=:Glider_ID_327_NucleusMale_55HFK",
    "D83FAFF508200C47DF03BDFF2F801FEC:s9P7AOkoCuPm/506hyAKzuRaIh0xzV9YZON4oDs7GoY=:BID_665_Jupiter_XD7AK",
    "EB16EA013B751792698E05435797C1ED:y9JgD812Io4mbaJ5i533Ts5SSfyXaGM4JyoimjP+i4M=:Pickaxe_ID_183_BaseballBat2018",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_A_003_Athena_Commando_F_GlobalFB_C_J4H5J",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:Pickaxe_ID_696_Grasshopper_Male_24OGH",
    "56FE93367C8B62ADE2A8A1653077C98B:OevQYyBvnT5vwQhOJhu74k5TNwE6pe4gu6okYYBepGc=:BID_989_CroissantMale",
    "8566FD040AC2B245597E11D1F85DB4E5:SEoqoweofxmXfxu848wKn1UJhwU7oQ2w2F0lBst+FnU=:Pickaxe_ID_508_HistorianMale_6BQSW",
    "738C0E8B5DAB633906DC77FE4C4E48F9:qr1ZfbWRp+uqwBMvEhY1XBj7Sr7SxRsWHN7jqYPaZfU=",
    "A92DE306E5174C82739D774151D7B661:RF9sTh7l2tp+ypCb/Lp3WeMfBExvk2LSUbim04xsCJo=:LSID_374_GuavaKey_IY0H9",
    "3E89561331A72D226FBF962DA29DBB82:qzWv2zubDSSrpTt3tKc4ZsReqR3QBKjhU1cGzVe7KH4=:CID_387_Athena_Commando_F_Golf",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_300_Athena_Commando_M_Slither_C_IJ94B",
    "78FA1DF9C04F25EC129AA57492626563:AZT1/Asa4CuxdTtvLrw9nlEcxfOuoTnLbSLztfs7QQ4=",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:BID_653_Football20_1BS75",
    "276E65E4041C467319534B14EAEA338A:Ib7KJMP8Q9if+P6x2bYZ0dC538B4LL3J1TcIy3rBlHk=",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_242_Athena_Commando_F_Grasshopper_D_EIQ7X",
    "96FD474CBA52137DC5ABF658BE17C792:ZLWvbUR7Xow1GUNjC9Mxg7DHVoJAnBr4b9gSzmyFcxU=:BID_862_BigBucksBattleship_1JA5G",
    "BB26302A83A2B42228EF6A731E598360:q6GH+OJutjEXL5wKuJnbLKAan9V/AXRxIkqg6WgSzUU=:Wrap_084_4thofJuly",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:Glider_ID_349_GimmickMale_MC92O",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_239_Athena_Commando_F_Grasshopper_H6LB7",
    "204D49F063979C3AF87EF896D074D1CF:SaYFk+GEE7mL4dsgs0v0VGR5ER4TwH8uTNX5XqSglu8=",
    "7F0F5EB44D49E7563DD5A196121D49E1:CBIvm8gTJLCz6sD05GKbQo6u/Nk4Poni/7wlp724KWc=:CID_265_Athena_Commando_F_AnimalJackets",
    "0A43BFE2D06B46248FC6598C0371D5EC:+U/nWLs0mNQue0yVc9tTaRF+2qrvzdKZyxUR+MzTvMc=:Glider_ID_347_PeachMale",
    "545BD59335CA43AC4481A621226B4E81:4lYAxO0wSzKarpiMl4b+bWQOjDkXdJKactoCetH65WY=",
    "419008D696C27533DFEDB08BE4F6C8F8:5I7VZNrdz8oZdzk1TTNCKkZXokilbXLFy7dQPPPlpuo=",
    "91C415954BF27B6E43970FB8A75FE8BB:YhHyxIA+Ru33r3pThiWqKNYdvDbL05yXSxKarRuMSxw=:BID_176_NautilusMale",
    "8566FD040AC2B245597E11D1F85DB4E5:SEoqoweofxmXfxu848wKn1UJhwU7oQ2w2F0lBst+FnU=:Glider_ID_257_Historian_VS0BJ",
    "22B8405FC3BE153C8148422C3F2D3A8A:d/ATMDztVZxwHLUCwOcJWP1/7oPKKGqbBWUBRNZ6dnM=:BID_837_Dragonfruit_0IZM3",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_942_Athena_Commando_F_Football20_YQUPK",
    "32F8552040D83320E998654666873931:izPPgPIvrxfBXPaI/LJzO5lxOZtzjOXQJBuk9kPdKe0=:BID_338_StarWalker",
    "7F863227B67DD0D99A7A4BBEE0682666:29bfvaQcZUswF3vrHMntLKfmknWKDf65FCbxbJghisg=",
    "57D2C065461284F546C48C971A44C6D0:EOfb/g0hZdMhd5biYOZR69B/mqPU7X+sgQQrp2gQ/s0=:BID_178_Angel",
    "AC86B4636DC6A3B6D2DF6DA8B5632796:VHknYzsodjamhC3oVkulL7sMpsRkw9ZcCcSguv9bZSM=",
    "23213D7D8F739DE37BCA56557073DA51:hmmf08PTLeIAJgxwHIFI131jzcy1SbirW6EzJtm1teM=:BID_979_CactusRockerFemale_IF1QA",
    "514364A06F8C12C3398C5F63D909EF7D:D8/bj3etFg8eJOVZ26L+pMrsdlTusbgvR2CL4WqKl3E=",
    "8E1887D55A60F69B33B234242FF49653:YofZaW+CRl0jhVhkp9z2CQWhTPwyjQ6dbHtISkLDfVU=:Glider_ID_367_AlfredoMale",
    "34DD24ED0CE62244E7FFD27EF4C29EB5:jTgMUc1ciLKwXF/PqyFJl6s9Iw5SXYHKiSThOQhG5TE=:Pickaxe_ID_735_FoeMale_2T3KB",
    "8E1887D55A60F69B33B234242FF49653:YofZaW+CRl0jhVhkp9z2CQWhTPwyjQ6dbHtISkLDfVU=:EID_Alfredo",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_306_Athena_Commando_F_Slither_D_I6D2O",
    "A9AFB4A346420DB1399A2FB2065528F5:Zjzo+CaLNmCygplzQo2wUL4LT33DEiL6qZWE2R0EYMg=",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:Pickaxe_ID_720_RustyBoltMale_UZ5E5",
    "3F21B0363A2CF6D94F7D789118D73595:Eq7VViwD0CoHAE0Y2grOZ/FZ5xGPjC8g78EpaH0385w=",
    "1AABA3FE6C5410551302A08A3787F5AA:o7Dsys2BQuUgASRBM63wL29ULpkCEp5Q5JNgzvoKl1w=",
    "919FDAB2FDB531820404333B27DC7B06:W9Csp0y6agsgcQXlRGvYUpPGPImNdFfBsZ8yQoUEdGg=:BID_296_Sarong",
    "A7D34E80FA70CDD2F367DBEF93B98467:KVErbMXsQqx7dxrZp5Ara4OVlA17pc29E2SZlFNipPU=:BID_283_StormSoldier",
    "6D85E82539341B90944E84FFAAD872FB:mAiBk7KbE2Dnr+yVFyJK1yAwv2eWb+yANFH0z2krQkw=:BID_299_BriteBomberSummer",
    "2FF619685EC983B800018ECBFF377ABB:Dn5ZlXEhBAhXP0RbkDskEQwOK4RUKTwAIls6cvVOr0g=:EID_SpeedRun",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_303_Athena_Commando_F_Slither_D0YX9",
    "4C3B1FC20956AE8C3C29A85446D013F4:dVksVi55yMPvgmuA2rjvlyDlySrQOK8wmH3aa69wtZo=:LSID_432_SCRN_Ultralight",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_446_Athena_Commando_M_BannerA",
    "23213D7D8F739DE37BCA56557073DA51:hmmf08PTLeIAJgxwHIFI131jzcy1SbirW6EzJtm1teM=:Pickaxe_ID_777_CactusRockerFemale",
    "54FD9ABD65879452DCB8CE11C1D7F1AF:nV0Vm4NCBl+MkGX8wiqfFrg0viDriL3I2xc4KS7n7fg=:CID_421_Athena_Commando_M_MaskedWarrior",
    "3E89561331A72D226FBF962DA29DBB82:qzWv2zubDSSrpTt3tKc4ZsReqR3QBKjhU1cGzVe7KH4=:Pickaxe_ID_190_GolfClub",
    "726DD9BDA97CE92DFF162668027518BE:/QdzaWcoVhInSz0Oa0qk+NV3XxRt9WlXwcAu766Y6aY=",
    "AF3080C00CB8CB301C167B00E9671CD4:wLmQDoGeYBN8Og/IMDoGxuuQNy7M+RQkKtajSZiOebE=:Pickaxe_ID_558_SmallFryMale_YBD34",
    "AF3080C00CB8CB301C167B00E9671CD4:wLmQDoGeYBN8Og/IMDoGxuuQNy7M+RQkKtajSZiOebE=:BID_710_SmallFry_GDE1J",
    "59AF6C46ABB214024067564F69D6EA37:NtUgzeFVvkbyZQGRVdteWV61HjED9MXquqlVKHo3c/M=:Glider_ID_238_Soy_RWO5D",
    "4009CB877085F3B3B0D76A686465A140:gMLJXUbFcIrqqUlAuoMI1b27KdWHBVJJeJWdYV1Iiro=:Glider_ID_276_Kepler_BEUUP",
    "B229884F839295B4B9EDC380B045C64B:SVmPvZenzQ5Si17i8daUFyKoOGDtaH4YZtsF1s2XkxE=:BID_745_BuffCatComic_AB1AX",
    "0242DBD83576CC7E4A6F228D02216147:Yfycn3jciR/FCYQx42W2GMzMp3pA3rgbL6WnVmJStxQ=:EID_Tonal_51QI9",
    "B0894F58B3D7DEA37D3432AB32B78EB4:gKD8R847p9z0mbZ/euClocy1Z9Gg1daZjk/gDqc34a4=:BID_950_Solstice_APTB0",
    "01FC97F8787B82E027EC64661E0D36AB:Mh1l2LJ3YrgaZtg7sRTd8XeBkVcyA3i089gZKkTr1gM=:Wrap_466_CactusDancer_A",
    "EDF724493161095DB54E9613C243A355:Yp7dsOYO778G7uRZNYhGag2diT70vhu2hAWvkzvtHjg=:BID_A_002_IndigoMale",
    "713D64294CD1C40F60DEEB805E3A2D87:CJOOHtEX7q4CELcZ96oZjrmSZd7pyJ2fMaFX912GDl8=:BID_193_TeriyakiFishMale",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_085_Athena_Commando_F_Hardwood_K7ZZ1",
    "599668A98461E4D89196E0189C32C4D2:8MqQjC52vWK/VwX4SfYC1wu9eiUTXdqq/xWODcW9dQ4=:CID_468_Athena_Commando_F_TennisWhite",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_088_Athena_Commando_F_Hardwood_D_WPHX2",
    "44DB36B2D2B3854669780458D2FE48C4:gtl0smAMRKg8d9TdDH47lUOYCygKzbAPA6/HaXLWy94=:Season17_Magesty_Backbling_Schedule",
    "F533FEDB46B06F324383349BDBC825D1:Z7b6780R78xFbYRbQehW/VZVDftI02RqvKe7XIYiOBc=:BID_184_SnowFairyFemale",
    "B66EED5CA4F4ED75170872E30B9B0E23:rHT8/uzcZZ0ENxU9dxKpr+cdAajZ5L5U0geHt6NoZhI=:Pickaxe_ID_420_CandyAppleSour_JXBZA",
    "5B26536B2ACB973C651C0D1A285C0E37:n4j7xWZ1HfwSGb9ixE7YMFyRsTjl3gjJVDZJj7Wy4rs=:CID_397_Athena_Commando_F_TreasureHunterFashion",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_083_Athena_Commando_M_Hardwood_D_7S0PN",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_084_Athena_Commando_M_Hardwood_E_II9YS",
    "A7D34E80FA70CDD2F367DBEF93B98467:KVErbMXsQqx7dxrZp5Ara4OVlA17pc29E2SZlFNipPU=:Glider_ID_151_StormSoldier",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:EID_Textile_3O8QG",
    "95EE98AB79EAA4E2871EFA0E4BA9CD7E:LJCJ2kW7AQoni1spB+sLcir3NXBEE7zOC0JGKKhn0ZY=:EID_Butter_1R26Q",
    "B0ACC6254D42350D124727B035C9CE55:ZDFVEa7yau61hc1ba5xNGtYdZ+yif7XgE79BBWIlPJ0=:CID_299_Athena_Commando_M_SnowNinja",
    "B229884F839295B4B9EDC380B045C64B:SVmPvZenzQ5Si17i8daUFyKoOGDtaH4YZtsF1s2XkxE=:LSID_287_BuffCatComic_JBE9O",
    "F71D60AE5231E90CEA7F53D90DC4F007:ver8B06IS0up7tNYy03zkhCl+CrTl3czgmXPYYONcM8=",
    "8DCAE39C7D9690E19F52655F02C613B2:ZZHbiVsbXquLlrtNVHtryLS3Vd1Ego8/8tlDpeUCgfc=:Pickaxe_ID_252_MascotMilitiaTomato",
    "59AF6C46ABB214024067564F69D6EA37:NtUgzeFVvkbyZQGRVdteWV61HjED9MXquqlVKHo3c/M=",
    "9261CD0F921EAA3CD6AA8C0716FB042B:W+yzeWWxWnA530lwV8nLi2BE+TD5MCXS11th7UphmPQ=:BID_689_TyphoonRobot_SMLZ7",
    "91C415954BF27B6E43970FB8A75FE8BB:YhHyxIA+Ru33r3pThiWqKNYdvDbL05yXSxKarRuMSxw=:Pickaxe_ID_131_Nautilus",
    "BA490514EFDA436A2679E381BD558AA3:3KBKxBOi/52H0feJ/ijKxRHk+lF1zID0uIpjd0T7/Bc=:EID_Haste1_T98Z9",
    "32F8552040D83320E998654666873931:izPPgPIvrxfBXPaI/LJzO5lxOZtzjOXQJBuk9kPdKe0=:Pickaxe_ID_253_StarWalker",
    "5581F333809DD14FA591F17B6C071687:/gEEJhUVQMVyFP7JR0jT4RM99Wj7hnIp2ZitAVdwAYc=",
    "45261C72DCA170BBF0BDB129B9FC0BAF:5db2NWibvzXoFGVIbg//HklLwxuGUFWO7tKGPStOM2U=:EID_SecretSplit_7FOGY",
    "DC060EA83FE6F9729B19150E40C7987E:zW3d3QhtvhE+q3x/P7/BA9JvyoruVmeACdKt6RPxyLY=:LSID_421_SCRN_JourneyMentor",
    "A7FAF0883F9147F93079F3A40413A83C:+wNde9ex5o3zvdjqgJUGhqcxmecYiQW3W1QuO00NUbc=",
    "5A1170F589134C4D68AAA2B5AA6EDA69:bfro7s6Qtde/H7C4zc6MJdpua1mhem8HywLluxBLDrg=",
    "E4C183B0EF31ADF061F175068046568E:AF+fNwseLnjCsPKzbFkYDkZE4gyYfGEaifyJjdsMjp0=",
    "65000C27C3BC5B9B904A0D20050D6B36:JFwQi7tWgJDr+E4GzYU/rgasjjk+1BKRB/N88e7rVvI=",
    "99B0F5AFB03FFA1BC3B8AFF75267CAD2:d4GffGn7ENqL9SpO5wnhKZzqzpr8S/4LQS2P+QD2wy4=",
    "63722D44ECCA0F4178B85F5A6BC4C31B:j42UL0bmfBkli6Aj92wWABwFby5rAplP/Ac6nh9kRvA=:EID_Vivid_I434X",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_938_Athena_Commando_M_Football20_B_I18W6",
    "44DB36B2D2B3854669780458D2FE48C4:gtl0smAMRKg8d9TdDH47lUOYCygKzbAPA6/HaXLWy94=:EID_Majesty_49JWY",
    "17F31F416B1B0A73F14F0A7973DDBD76:+hUk8/wD736u5sylQPXcKKREoo5vSPaWPG+3xxT5nFM=:Pickaxe_ID_157_Dumpling",
    "59AF6C46ABB214024067564F69D6EA37:NtUgzeFVvkbyZQGRVdteWV61HjED9MXquqlVKHo3c/M=:Pickaxe_ID_462_Soy_4CW52",
    "F3A99CD0D4F58EECEEB0D112506AD846:ZZtCRPcKk6itVryDavp7uZFIXiZF5CW0O9b+8Zt2Oag=:LSID_328_Quarrel_K4C12",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:Glider_ID_316_TextileMale_3S90R",
    "02421097082555483CA9524F79EF7687:e9wZT5/2KHmpbw6KjR8u4uo3iG00O92+PAZMbk09a3w=:BID_545_RenegadeRaiderFire",
    "D49757E2D55451A0D5B341906FE2ABE4:PWMwnjgi/wUDV+yxg02QsU33jA529fxVTRHyqnkv21c=:EID_AshtonSaltLake",
    "B1B800E199A6D4649287C11AE89F67CA:3udFXffIw3c7eM5hljF5mJQA36FbW2PeF8Gx1TcD1vc=:Pickaxe_ID_201_Swashbuckler",
    "F2E3A44428F24B0E4F481938A8E3D8EE:Vgb58eI7kGPp+Ecr8lhE2RMoKeCLFG0sWAEugWV295A=:LSID_305_Downpour_CHB8O",
    "23280A6FC0902B6420BB82522AE16D2C:C7o6m2vJJY+XWKd0t1YLBPVLYCMgNbt10d/itx5Wjnc=",
    "8AE930B0D623C1C2B3926C52ECF6250B:uwtZv87e9DU/Z1ZvYB7Pv4TdRQ4/ZRT9nYJCwYSmlbI=",
    "CBFF239A1792F25920D863F223368B54:J3N3cUH3M0R3uyzkE0qVK/SouxC/X6VEswcoWb6ViL8=:Pickaxe_ID_215_Pug",
    "95C6C2B37E1D15D60BB5C20D9D47BA31:exdH0xe2v+2t1wyoXpZGLX+iGDIdRxcQ6BG9iqi07Lo=:Pickaxe_ID_808_NobleMale",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_235_Athena_Commando_M_Grasshopper_B_RHQUY",
    "6838E4BB35C0449D4F66F7E92A960D1F:KOKH3JA+OMliB+f17Pd8OFEtooaCZjehz3CvfqaSbtU=",
    "CCFB247DE6ED8DB4856E039A5AE681B8:Z8ixoqcCEiFqUH1qec+yUNQTP1+D1xQjYw6FDpUQa9c=:EID_RhymeLock_5B2Y3",
    "82669F5A2F9B703D1A6BEA3BCB922D7D:Leu9rrDPaqZd3izIU+IKpFcP/NNcqSncLkV2lapQL6k=",
    "772E01C212E9A77A501AF954ADA90B09:nQ4i6bbmbGMzcq8iyjoM/BGUbX2DSIJRAZ96/qaOf/Y=:Pickaxe_ID_744_SleekGlassesMale_ID69U",
    "566C4D92AF66F45DF5E2D7EB43CC27AE:EuAYwU5tQBXzGoSj5BMc7S5yFfe9wZ2qrzx/hIHpnqw=:Pickaxe_ID_479_LunchBox1H",
    "EBFE6788D367D741AF0A4FD098CDFD39:FAeJTGyT49P+dQOmKx+lMYVAxu7qtIPlqSaLAR85zqI=:EID_AssassinVest",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:BID_428_GalileoFerry_28UZ3",
    "FA393ED7DFD20657B9C8659CB0295F64:G5wmtVhL0E8/+gpxHPK3HGJJ5RvfoWyeYrLJ3Awm9f4=",
    "3DFEA395156D835B86EB22801411ED08:cG8Q2VOqa9d+9J4QEvdBWe5hjbIayC4HtRp7svIWZ9g=",
    "4F365EB12B55EB9A6BDD99DFC3D02E61:JFApzAook6DV1rLMngEwoo0pprP17X6gjpNc79NQ43A=",
    "6A2047910081947B9A5DCF542A9AEBE5:V/jMTWL+zbqeIlKCE9+SM3+X69aYbt/cN0+G1D0GBQU=",
    "23213D7D8F739DE37BCA56557073DA51:hmmf08PTLeIAJgxwHIFI131jzcy1SbirW6EzJtm1teM=:Wrap_460_CactusRocker_92JZ7",
    "E3D0A604B93651DDC6779B14F21D0FDA:8gPR3gZwEJxfkZBkXk0QAlpnJ7q5mXzVc0DN3lzpJ5k=:Pickaxe_ID_114_BadassCowboyCowSkull",
    "A6130F4077B928D41D298463C61C0F34:oW3GkVlIb8uiNl0CzqrwVZeGfnEujp2O3O3tnw2zFOs=:Wrap_094_Watermelon",
    "772E01C212E9A77A501AF954ADA90B09:nQ4i6bbmbGMzcq8iyjoM/BGUbX2DSIJRAZ96/qaOf/Y=:Pickaxe_ID_745_SleekMale_ECRL0",
    "91C415954BF27B6E43970FB8A75FE8BB:YhHyxIA+Ru33r3pThiWqKNYdvDbL05yXSxKarRuMSxw=:BID_177_NautilusFemale",
    "4E7938F1FAC98BDF378823116712AC7A:jbZVgprILTQomUdGeJF0PsAFAJxsSCs5cKcXweZMAg0=:LSID_273_Tar_ITJ9S",
    "44DB36B2D2B3854669780458D2FE48C4:gtl0smAMRKg8d9TdDH47lUOYCygKzbAPA6/HaXLWy94=",
    "D49757E2D55451A0D5B341906FE2ABE4:PWMwnjgi/wUDV+yxg02QsU33jA529fxVTRHyqnkv21c=:Pickaxe_ID_203_AshtonSaltLake",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:Glider_ID_186_GalileoFerry_48L4V",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:BID_429_GalileoRocket_ZD0AF",
    "F3A99CD0D4F58EECEEB0D112506AD846:ZZtCRPcKk6itVryDavp7uZFIXiZF5CW0O9b+8Zt2Oag=:Glider_ID_305_QuarrelMale_ZTHTQ",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:BID_955_Trey_18FU6",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_909_Athena_Commando_M_York_E",
    "510BE1093533EDED92752C0B90A80895:vaI8rYMUPwx+M61tvfJ0pf+dMK/96pnzKOQluAPmjU0=:CID_424_Athena_Commando_M_Vigilante",
    "4C3B1FC20956AE8C3C29A85446D013F4:dVksVi55yMPvgmuA2rjvlyDlySrQOK8wmH3aa69wtZo=:EID_Ultralight",
    "45261C72DCA170BBF0BDB129B9FC0BAF:5db2NWibvzXoFGVIbg//HklLwxuGUFWO7tKGPStOM2U=:EID_SecretSlash_UJT33",
    "F60CFFFA32CF6A877B50DA7F0A88326E:OWIopbB4fxaobofPI9lF9hn6BPG9NVLp4Od61uQppfo=:Pickaxe_ID_198_BountyBunny",
    "B4BE2A5487426AFF06CB7089EA9B75BE:w7Hbt5PsQ4MDg9EjvOU8WdtL/BrWxZNp9NM2UrHSjRg=",
    "E3D0A604B93651DDC6779B14F21D0FDA:8gPR3gZwEJxfkZBkXk0QAlpnJ7q5mXzVc0DN3lzpJ5k=:BID_329_WildWestFemale",
    "6EA156BE3D18E1D649D7D4B3F8C0FACA:qAKD9oM8u4IvUcKbReHTMaLg7GtHLBcnmz8++vwwB6o=",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=",
    "63516700C5CFA6F1BE71B29214957E33:eR9Otw83jJyrj808CkqElVYzlXztuc14/u2pDtPtooQ=:Glider_ID_155_Jellyfish",
    "44DB36B2D2B3854669780458D2FE48C4:gtl0smAMRKg8d9TdDH47lUOYCygKzbAPA6/HaXLWy94=:BID_801_MajestyTaco_FFH31",
    "34DD24ED0CE62244E7FFD27EF4C29EB5:jTgMUc1ciLKwXF/PqyFJl6s9Iw5SXYHKiSThOQhG5TE=:Glider_ID_341_FoeMale_P8JE8",
    "5E15C5486CE8E539552D4D3E7682F9E2:+L/tTz+woDFZJEvtxfq8m8tNI1R72sYK7rnYr7sHTis=:BID_311_Multibot",
    "2A12750AF48FB5468105F255DC537CC1:lKjAansupIjoXjT3/0vH9XeOzVp9S+fBGtyP90Gve60=",
    "591DF838AC4B3A6350E40E026B26D5C0:MBvGoHxJQBTxCm2V82s2yHqRWPsYdFyj8xKUhFsUkyE=:CID_745_Athena_Commando_M_RavenQuill",
    "7E9FAC0F2BFC4AE3A2ED4C87D1A57DBF:xaR/8qp7kFAbILx9i6ANnoam0rZ/tP8Xy3yysuqt8BA=:Pickaxe_ID_231_Flamingo2",
    "1D02A6E14FDF53655E818CEF9E57B1BF:ekG/6DFEYOaCYi5hruGoY/o1KzC/O5+9hJbdMyti8Gk=",
    "3FCDA1185C56B6A5FDC57AF760566A51:9I7HsUJTcd0EMjpuwQmyno0jbrJon+nZePI6IuQBmtk=:BID_983_ScrawlDino_AD541",
    "E0FB7B394449CE6450EA90C93D710EB8:NrXwNX6lKuu/kyQuvE74+6Uo04FODoV4ZqxToj/jS6I=:Glider_ID_157_Drift",
    "1234642F4676A00CE54CA7B32D78AF0C:Nd8vhYp296C+C0TqSIGxu0nBYOFGQ5xBNK5MFjHS8IA=:Glider_ID_115_SnowNinja",
    "E48EFA857D8E6914B2505B05AADFB193:4AUdytefPzWNT8c11iGtU4xcGNWEgzpMJbxTjUq3NS0=:Pickaxe_ID_465_BackspinMale1H_R40E7",
    "A31042B93988941EE77BC1E2DA6AA05E:pDUufUGsOVTv3LuXoq56xwz8HRnzlrHTvTLWbzBaPcU=",
    "715D5B8D89F01C804C2ED33648157A6C:GbMcQmdpv3ju/P36UQIlDFZ0Q5jr0he7O2oTJ702McY=:BID_446_Barefoot",
    "286270CA017B478C6FF6B5B815428F93:OUbNW00OmQLCd9iLA13soMU4wYtd0RTc+lEkoPdvF4U=",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:EID_Slither_DAXD6",
    "053E7EE2FE8B6EB117A01D1E0AF82AD1:SDqBD0e/4fAyf3WCPqwUQD/gDhMWPtbdTZt5j/p3M2A=",
    "5AD068EB1D56D87706E44EEB3198CF1B:o9Gp08KD/vgq3RTrUbfGJk7rlfUqZMxoRKPiwvdVkXY=:EID_LogarithmKick_NJVD8",
    "35C2B057E5168DCA74B6F1DDAC745E60:73haJlY3S0TVmH0ELxyw6p5FzFRrITWqOmobH9F2Mq8=:Glider_ID_343_KeenMale_97P8M",
    "F8E2B9191F948DBBEC6F6688BBA7DB41:0Rv3StsHC9OvC6UDR+L+CLgz63E+qGme+zw6sebd2uc=:EID_Swish",
    "91BEC79063CD316E69E79215E0CE6437:uE56sTOQozw4kZfj70CQIEFqQOFORE1+mZhMhccG1z4=:EID_ModerateAmount_9LUN1",
    "71BEC74046C6920A467E57B69FA3835A:q6m1xB4+mCmXL3g7eRGykDO6ZKrXS8M7m8SqbqIKzkI=:BID_201_WavyManMale",
    "E6CB9B5FE721FB85529A6558D32987CA:aKSiHv73+80I2NZ8lFAbV7CRyRGO4LN9J7a6gjh51b4=",
    "72CC2893A6B672F3854F36629B770774:0BgQgKZRRuPFEoqn7CxZVhLBOfpCE3qLKGQlZc+SA80=",
    "22B8405FC3BE153C8148422C3F2D3A8A:d/ATMDztVZxwHLUCwOcJWP1/7oPKKGqbBWUBRNZ6dnM=:Pickaxe_ID_664_DragonfruitMale1H_4BIXL",
    "23280A6FC0902B6420BB82522AE16D2C:C7o6m2vJJY+XWKd0t1YLBPVLYCMgNbt10d/itx5Wjnc=:LSID_367_Paperbag_3WGO8",
    "E59B013651F078E718F08ECF9E1559EE:rTGy9at5kTfQtu8EwVrUihfzuN8vkFPl3XNyGvqbZX4=:Pickaxe_ID_194_TheBomb",
    "D2FAE1D098B2B4695EB59FAAD504798D:ZUDIqDvGVcpCVuA3h67vdkVbZwLuC0Z1zX33JLyi5xE=:Pickaxe_ID_727_LateralFemale_D9XJG",
    "EDF724493161095DB54E9613C243A355:Yp7dsOYO778G7uRZNYhGag2diT70vhu2hAWvkzvtHjg=:EID_Indigo",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:EID_Lyrical",
    "8D578CF915DB851F9BE73C937D3565E4:Xk8kUK9cut4tXr0VQjufZdoepp+TzGmlDA7fzYA1rAc=",
    "17F31F416B1B0A73F14F0A7973DDBD76:+hUk8/wD736u5sylQPXcKKREoo5vSPaWPG+3xxT5nFM=:BID_207_DumplingMan",
    "682BB8BC5B0BBE6318CF2164E074E7E8:NA4nCwFqo95pvsqkLXWO2WDdLY+MQGcj97N6t881BQE=:EID_Socks_XA9HM",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_447_Athena_Commando_M_BannerB",
    "B3A4B83DA3274522D4B9F117DCF9A0B3:y5n7vfr0uucr+psZzb2F3g45pWUsv3i3j/M6bl78Z9A=",
    "010E6ACF85E4A58BF6F551EFE7B85F61:DwCIH5Dw/1wdiS6gFGmWe4HUgD9kMOEzjbzM/1QshM4=:CID_371_Athena_Commando_M_SpeedyMidnight",
    "488F01C34A9A24115776EA801A6E7E1B:WB1TFXsB2Cywzb16hZ2HdBc8X1FsTVqzlDwhyJO8Pcc=",
    "E7D27A42770632B7A50BED813D9B1696:bxADNk9dmPNeKEuSvJl44teif6sHvs36yBZ55E9fhwQ=:Glider_ID_363_SnowfallFemale",
    "DC060EA83FE6F9729B19150E40C7987E:zW3d3QhtvhE+q3x/P7/BA9JvyoruVmeACdKt6RPxyLY=",
    "B1EB196DD39D0736E7E08F99B07D8B9A:1fDhBY8uhi++l6QQPL2YtxZgUv04OZoMGBrH+yN8yKM=:EID_JanuaryBop",
    "6B0D17A04F83AAF1E4EC1D0D481D7B03:fgSAnECppKmZD1eolFEZOuOpUDPbt1MmvGroMQ0sPFU=:EID_CrabDance",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_941_Athena_Commando_M_Football20_E_KNWUY",
    "BE2C3EF59AB81D812AF5B8153325998F:W7NoICLZt9L2d7XZ5dT9gtI80MyOizk7uA9LtwA/Edw=:Pickaxe_ID_687_GiggleMale_YCQ4S",
    "8E1887D55A60F69B33B234242FF49653:YofZaW+CRl0jhVhkp9z2CQWhTPwyjQ6dbHtISkLDfVU=:AlfredoSet",
    "B4585A36D49CF15E1E236775B8C659C1:Ced0+UTeTBbDhnHM9mLTk5qxlz3YZK6dEn1U+NTxOko=",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_997_Athena_Commando_M_GlobalFB_C_N6I4H",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_087_Athena_Commando_F_Hardwood_C_AOU16",
    "280F643808DE5EAB39E77B23E2193CE9:lYbsbCLMwjFvdalNxsBUj+PZiJmtoa/wclz2sAOQxuM=",
    "49034BA1606B1672C8B634D2C6186807:5ujMnF4IKuvumpfNcUA1yi1mXjy5zBGPg00TJkHlG04=",
    "95C6C2B37E1D15D60BB5C20D9D47BA31:exdH0xe2v+2t1wyoXpZGLX+iGDIdRxcQ6BG9iqi07Lo=:LSID_440_Noble",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_301_Athena_Commando_M_Slither_D_O7BM2",
    "58388BA7BD1643A85EFD49BF26EF5912:Aru327JJHsGKCD2YlQT+Ejy63//vly9ChTdKsfgL75o=",
    "BA490514EFDA436A2679E381BD558AA3:3KBKxBOi/52H0feJ/ijKxRHk+lF1zID0uIpjd0T7/Bc=",
    "1A10A7700C3780E2B1A03037D64E1EE5:IvQikWqraVuMzt8eP1B0cxW5Dcaiv7njo2QHFfZFmY8=:Trails_ID_081_MissingLink",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:BID_850_TextileRamFemale_2R9WR",
    "AE9F7B3419C7FBD2414D72E2E1C8A7BA:kpIotniLp60tWfbBitDUrjw6gmJ2Swl+YT3QAkecpRA=:EID_ProVisitorProtest",
    "F395571A36D2BD888861E61EEBD45AF8:D/35GPTIOKbdfmpxRJmHTkjNXcWv+XdSmTxQt6z1hvI=:BID_701_SkirmishMale_5LH4I",
    "91181AD6BCB9443F7F6479DA8BA9B7A4:ckv0KEQuDpca5cP5JLUH8K1f+tVYvZptoMsGYR7fxDU=",
    "027FFBB49E4285146DA1C5238EBB7DB3:yjcsOd6x9bWnX36cFx2Q3/zgHrCrnuWwiuZexrdcM8s=:BID_939_Uproar_8Q6E0",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_906_Athena_Commando_M_York_B",
    "0F810ABB0DB8672A438B14169C048145:9vfFUEaEveznaEvyq+mhGagh3w98fRdZ5BpwQgNzMzg=:Glider_ID_133_BandageNinja",
    "EBFE6788D367D741AF0A4FD098CDFD39:FAeJTGyT49P+dQOmKx+lMYVAxu7qtIPlqSaLAR85zqI=:BID_271_AssassinSuitMale",
    "E0AEF4894E1283946745F7902F7E105A:7MXKJEs903nNbT1oFzykxoHbQNDnOBm6yfadj+mtBDA=:EID_Rover_98BFX",
    "A25DFB2C9EBAECE22F893DAA48A7138F:d5KZse0g/v9xySiDWLhNw3kCvlWXZKWMKUjDzW8/SIg=:Pickaxe_ID_435_TeriyakiAtlantisMale1H",
    "4009CB877085F3B3B0D76A686465A140:gMLJXUbFcIrqqUlAuoMI1b27KdWHBVJJeJWdYV1Iiro=:BID_703_KeplerMale_ZTFJU",
    "7ADE21079D27D9CA3931F676358A0F72:jWtbxcYHNph24P0SKVvPEuGDIdFpq+wZAEIlGXhSpj4=",
    "488F01C34A9A24115776EA801A6E7E1B:WB1TFXsB2Cywzb16hZ2HdBc8X1FsTVqzlDwhyJO8Pcc=:Pickaxe_ID_538_GrilledCheeseMale_Z7YMW",
    "F60CFFFA32CF6A877B50DA7F0A88326E:OWIopbB4fxaobofPI9lF9hn6BPG9NVLp4Od61uQppfo=:Wrap_048_Bunny2",
    "30A1FD89B2D3C155DAF14852A39BA97F:C0IwuJFw9v06OF8XthOhzUd3nHOTCII1gmx/7eepmDo=:EID_Zest_Q1K5V",
    "027FFBB49E4285146DA1C5238EBB7DB3:yjcsOd6x9bWnX36cFx2Q3/zgHrCrnuWwiuZexrdcM8s=:EID_Uproar_496SC",
    "8D336ADD3E862004534F4D310F0A681F:Oh4kuy+66NB6gPNkix+oKng0QTO1Dju8k6SxT3HXxe0=",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=:Pickaxe_ID_693_SunriseCastle1H_5XE1U",
    "EBB742679C34C9D4E056A5EAADF325B9:ousld0RIkeu9L9aTDwr9aNCIt+wOwB7KxGPY9BTfQ7s=",
    "6ED300E6401C02B19FDF5F82D945C661:OVr0GWPGv86nzWikKzrw2SC4aS+4ApgKKLvQ7d0Nkn0=:CID_336_Athena_Commando_M_DragonMask",
    "5D6562F1EAD89513C82C2F37A24E7F82:I2c+SQCdDvJpC6z1xniRT+k41KAp0pla+o/H68oXFLQ=:Wrap_179_HolidayPJs",
    "9E9072AA036FB1FF6B2AAD7BEFE7BF17:ORHgZOt4Zrtc8dLSx6jCsWZ3Z6AwPJiSiFAkZRMK3kM=:Pickaxe_ID_649_AntiquePalMale1H_GBT24",
    "63B2E664F9DEE5B42299191174C3B3C3:U1GOSBqPUDAFq3pjEdJg8nHb321IH6571dkhF0nEMss=",
    "4C8D53A32D85124D08A3DCE6D3474A30:gam5sVciLPzKr+wmWOoctLo5HFqBvBLKKcxh6ZV1kn0=:Pickaxe_ID_533_WombatMale_L7QPQ",
    "C7623A35411F3D5FBDE2688C7E4A69EB:qAi49mUKsB2dbfbtJWDf3yO2DfRStA+Ed9XgDjC8Zaw=:BID_189_StreetGothMale",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_240_Athena_Commando_F_Grasshopper_B_9RSI1",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:BID_917_RustyBoltMale_1DGTV",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_953_Athena_Commando_F_Football20Referee_B_5SV7Q",
    "F6E92DDBC70C8184E837D31905B2F2A7:UCSPatT+yv3YH2x0Ks+2GSXhSSu+3ZvZs6Lai3oOi0Y=:BID_826_RuckusMini_4EP8L",
    "FBAC0AD8C03AAB2DC3BC077597517179:5oj8B4R53plPxRictMN6QkQ741CibMbmzRJYIDIQ5iM=",
    "A10B1E27AF53CDC331BF4797C97B6B9B:fy5fTzL7HXpOBRg49CHm/E8Iptd4X12eYNBAeSa5CY4=",
    "BAEF248980269F569C6E1FFF2B885DF6:2b6DQGIcab1r7zsw5j3MR84iDmt0g1XBquxJVR/8GxM=:EID_TourBus",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:EID_RustyBolt_ZMR13",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_945_Athena_Commando_F_Football20_D_G1UYT",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:Glider_ID_333_RustyBolt_13IXR",
    "BAEF248980269F569C6E1FFF2B885DF6:2b6DQGIcab1r7zsw5j3MR84iDmt0g1XBquxJVR/8GxM=",
    "E5C19AD4D84758F8B943DA9A9D608712:qYxz7kOHjgf5SSa18F5bcIL1nLD0n6MD1vUE1+SwP08=:EID_Bargain_Y5KHN",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_443_Athena_Commando_F_BannerB",
    "335BDA9AA7DA27137CB7F1DA56FA2E6B:GJEyHEl3Q+8h2k2Cbe5sfG1lNLmXHSts3n+0QYH4Kjg=",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_089_Athena_Commando_F_Hardwood_E_4TDWH",
    "7A8E25F664219ED6CCF3AB1658D0E557:TV+yyWpI3iHJoaK3o1t6+/uhN/sFZ1OixoAx0n7MtjM=:Wrap_118_AstronautEvil",
    "A6855B699FE10FE50301AFE1A4FA74CB:fKXFbKW6dUWHLSC8M4KLAg1elVXH+wYouFbpvvtiIcY=",
    "E4143E437DE7481237AFAB40C59D96E6:a35NCp3zTY2AhSsZWy09BJaXJDU0LMJbiiP1u0dOl0Q=",
    "4755D9C0E2D1DE1C09B77DEA8B830471:9tUO5yVhvp+/sp7icZaEDw05nMAdS6bYAWYyfQNsxBc=:Pickaxe_ID_388_DonutDish1H",
    "099F6A310406E06EEE5B011F57E8ADC5:eN0n2GvhVfW8LKPVA+LvlegACOXLQLyOxt24wFERaio=:EID_OverUnder_K3T0G",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_345_Athena_Commando_M_TreyCozy_B_4EP38",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_238_Athena_Commando_M_Grasshopper_E_Q14K1",
    "1C8FA86241B2E4D084F7548529629CF6:pmXOfd+NEXcLhZX5YqDLjHu8/yzZoo4dWPcCM8ccXoI=:Glider_ID_118_Squishy",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_442_Athena_Commando_F_BannerA",
    "B7D9219AF6290146AAFF711E464C5849:iwGv47bJtl/Tm8oJGdnta9aDA86nY0IyjDmJWjQYdQo=:EID_TrophyCelebration",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:Pickaxe_ID_721_RustyBoltSliceMale_V3A4N",
    "E7D27A42770632B7A50BED813D9B1696:bxADNk9dmPNeKEuSvJl44teif6sHvs36yBZ55E9fhwQ=:BID_977_SnowfallFemale_VRIU0",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_908_Athena_Commando_M_York_D",
    "CCFB247DE6ED8DB4856E039A5AE681B8:Z8ixoqcCEiFqUH1qec+yUNQTP1+D1xQjYw6FDpUQa9c=",
    "9E9072AA036FB1FF6B2AAD7BEFE7BF17:ORHgZOt4Zrtc8dLSx6jCsWZ3Z6AwPJiSiFAkZRMK3kM=:BID_827_AntiquePal_BL5ER",
    "F7CAA8D040108722FFA35FAA63DFD63E:WNwYWakPoe/BGxI8+xsB446zHv4R9A1krz8SK2y8Pmc=:BID_164_SnowmanMale",
    "D938886074C83017118B4484AECE11AB:wjHAHm00Vg6n2x5LU91ap0+SFX5ZXXBmax1LyX8Aips=",
    "D7EDE7B4CE393235BF4EB8779C55D5AE:tvYJfExMmwMpbWXSe8bxfGkpl1wcJv4B/RBjd8qWcZ4=:Glider_ID_336_OrbitTealMale_VCPM0",
    "E45BD1CD4B6669367E57AFB5DC2B4478:EXfrtfslMES/Z2M/wWCEYeQoWzI1GTRaElXhaHBw8YM=:CID_229_Athena_Commando_F_DarkBomber",
    "204D49F063979C3AF87EF896D074D1CF:SaYFk+GEE7mL4dsgs0v0VGR5ER4TwH8uTNX5XqSglu8=:BID_643_Tapdance",
    "5471C1F8E35769AD4220BA02258BC5EC:uQVQxaCRJdmeLB4Y37GxewfPtXo3XX4NZJmA9C0z98E=",
    "E8585F83E40CD4CF0272EA6012055A97:4LrXtLEBhL5JquAu4/kq1Dghb4/355YROt3ciXg+ysE=:BID_987_Rumble_Female",
    "D47524F6F863DCCBB2455472F0FEFE2C:cRoiHZin2Lnv6yQ4Zt2WoIpQc1ZjLbfl1Ogid24ydZM=:CID_A_417_Athena_Commando_F_Armadillo",
    "D938886074C83017118B4484AECE11AB:wjHAHm00Vg6n2x5LU91ap0+SFX5ZXXBmax1LyX8Aips=:Pickaxe_ID_581_Alchemy_HKAS0",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:Pickaxe_ID_719_RustyBoltFemale_0VJ7J",
    "27D6556F776B2BDA97B480C1141DDDCA:uvUqb5LuwRFWQnA4oCRW3LNdorYcGtOmJ8PvBeCwBKg=:CID_467_Athena_Commando_M_WeirdObjectsPolice",
    "A93064DA8BDA456CADD2CD316BE64EE5:nziBPQTfuEl4IRK6pOaovQpqQC6nsMQZFTx+DEg62q4=:EID_Bunnyhop",
    "3AC8A6B5089F55E17E00AAD8AC3C6406:TlUSkJe3y85fW83rHMy+XuqcZxQduXcB8yftpPoiDvo=:EID_Loofah",
    "6EA156BE3D18E1D649D7D4B3F8C0FACA:qAKD9oM8u4IvUcKbReHTMaLg7GtHLBcnmz8++vwwB6o=:BID_906_GrandeurMale_4JIZO",
    "E47EFA3166A5D7B35CEC27B19AC66AE5:JURSqAHhHK6YqLP5rKhCO+SQ2oql4NqJaoaeNGtsrM8=:Glider_ID_304_BuffetFemale_AOF61",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:BID_990_LyricalMale",
    "A25DFB2C9EBAECE22F893DAA48A7138F:d5KZse0g/v9xySiDWLhNw3kCvlWXZKWMKUjDzW8/SIg=:BID_566_TeriyakiAtlantis",
    "B0030ECDA329A8B589D249F794EA90B3:BfF0FYJQJ71DMUBmClT0DppsOy+1Syn8fGu6qNtTgXE=:CID_A_094_Athena_Commando_F_Cavern_33LMC",
    "772E01C212E9A77A501AF954ADA90B09:nQ4i6bbmbGMzcq8iyjoM/BGUbX2DSIJRAZ96/qaOf/Y=:MusicPack_122_Sleek_3ST6M",
    "110D116208C62834812C2EDF2F305E49:MwuF5zX7GpQCGL2w+CwkPmGzH3q05YUoLo5udhVMNPg=:BID_488_LuckyHero",
    "40E9F547033360DFC0DD09743229B87C:x0/WK54ohwsadmVGHIisJNyHC8MqlU8bg2H+BsaEBtc=:EID_Kilo_VD0PK",
    "2E539CD42E0594ED4D217ABE4E2B616F:9zdoLMrIZomTGmvDId1RMEGSfktV9gBGgcD2diSSMw4=:EID_NeverGonna",
    "EB16EA013B751792698E05435797C1ED:y9JgD812Io4mbaJ5i533Ts5SSfyXaGM4JyoimjP+i4M=:Glider_ID_135_Baseball",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:Wrap_394_TextileSilver_ZUH63",
    "488F01C34A9A24115776EA801A6E7E1B:WB1TFXsB2Cywzb16hZ2HdBc8X1FsTVqzlDwhyJO8Pcc=:EID_GrilledCheese_N31C9",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_237_Athena_Commando_M_Grasshopper_D_5OEIK",
    "E7D27A42770632B7A50BED813D9B1696:bxADNk9dmPNeKEuSvJl44teif6sHvs36yBZ55E9fhwQ=",
    "47668DCAEC0AE101E0402B6105A6DDF5:rSOpMue5liEBVSvy/0JZZGTPsP2QeA7Yw9GdicJHs7Y=:EID_Macaroon_45LHE",
    "13F1DD5EC796B357B6085D50BBDA3C18:7NRW9FQONfoNEwOJARayC1upKkjg3obxAWICvcXfUWs=:BID_426_GalileoKayak_NS67T",
    "E7C565B86445735863B8080B9BE651F7:7M3P/+is0y8muF7/0N2dJo96J3P/k991Vast/lb7Xec=",
    "6DEBEC4266A3BC248F8A8FD4B76878BF:wjCAJ9VaThgTfbvUetCEWQFii5GmdfPwFCvxLv5ip/g=:EID_Eerie_8WGYK",
    "2E5F91AEF58F310AE2044EA39C43BB81:pNy1GtfVzymqacOqXRY14EZEvI5ZSVD5AFxlhxXC5qk=:BID_870_CritterManiac_8Y8KK",
    "F2A5D91602A7C130FA1FB30A050E98A2:MrhEh24cVikkhJJUX/LBAaNtgYV20VBiR5oaMDJ2nA8=:Glider_ID_346_GalacticFemale_LXRL3",
    "6CED8B5F648ED1ACCC8F1194901775AF:qjfCT39FVniEjPj+CvZu5Qz8XHHtdnH8kCsV3P1OaJw=:Pickaxe_ID_196_EvilBunny",
    "488F01C34A9A24115776EA801A6E7E1B:WB1TFXsB2Cywzb16hZ2HdBc8X1FsTVqzlDwhyJO8Pcc=:BID_687_GrilledCheese_C9FB6",
    "BFE1F518C16A9F061B140D829ADDB0ED:bHkPYjXd71vacoJ4IisL//zEyVLFh+Di8MUqV9KkpFU=:CID_A_138_Athena_Commando_F_Foray_YQPB0",
    "57C0A809F1C608D62307954035E3DFCD:FuMI1S1xM1U7UrdX4qZhPq77674JV+EV4HWsn59bmbE=",
    "F395571A36D2BD888861E61EEBD45AF8:D/35GPTIOKbdfmpxRJmHTkjNXcWv+XdSmTxQt6z1hvI=:Pickaxe_ID_553_SkirmishFemale_J2JXX",
    "CB3D84444FF0E551D18939AA7226B17F:U4GIAd4fGYWy9tySw3iVb92+6ZX3rQ3FsiBCXMT4TSo=:Glider_ID_108_Krampus",
    "2DCD2E2A9A816AA9035999F8E6F85F6E:6xM4ZYt0UAylyuIgFrmOgq4fYVH2ChEzQNcl8KGQF0o=:Pickaxe_ID_406_HardcoreSportzFemale",
    "6EA156BE3D18E1D649D7D4B3F8C0FACA:qAKD9oM8u4IvUcKbReHTMaLg7GtHLBcnmz8++vwwB6o=:LSID_372_Grandeur_UOK4E",
    "975414A2AAC78A3710C3A47A8E3B7A57:LQWa9K05LB13Fn7Brzi8R3vsMRmFcNyJaoAcmBFZNjg=",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:Pickaxe_ID_328_GalileoRocket_SNC0L",
    "4C838738CDC4946786DD7BE341AB05DD:eyjCm9OcFQSvVRVBZizNVyF+8kb9OlNFrvDy8d1QDfo=:Pickaxe_ID_197_HoppityHeist",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_995_Athena_Commando_M_GlobalFB_H5OIJ",
    "B66EED5CA4F4ED75170872E30B9B0E23:rHT8/uzcZZ0ENxU9dxKpr+cdAajZ5L5U0geHt6NoZhI=:EID_Fireworks_WKX2W",
    "6A3F6093DECACCD1F78CF802DE7AFF84:Skd0CfmqkmJAUqDFE6Qy/adL2MSN4IuAndXZ0SepEXw=",
    "7E9FAC0F2BFC4AE3A2ED4C87D1A57DBF:xaR/8qp7kFAbILx9i6ANnoam0rZ/tP8Xy3yysuqt8BA=:CID_464_Athena_Commando_M_Flamingo",
    "4E7938F1FAC98BDF378823116712AC7A:jbZVgprILTQomUdGeJF0PsAFAJxsSCs5cKcXweZMAg0=:Pickaxe_ID_548_TarMale_8X3BY",
    "01FC97F8787B82E027EC64661E0D36AB:Mh1l2LJ3YrgaZtg7sRTd8XeBkVcyA3i089gZKkTr1gM=:BID_986_CactusDancerFemale",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:BID_991_LyricalFemale",
    "56FE93367C8B62ADE2A8A1653077C98B:OevQYyBvnT5vwQhOJhu74k5TNwE6pe4gu6okYYBepGc=:Pickaxe_ID_784_CroissantMale",
    "63516700C5CFA6F1BE71B29214957E33:eR9Otw83jJyrj808CkqElVYzlXztuc14/u2pDtPtooQ=:BID_295_Jellyfish",
    "1CE4B8636E40B4AF8858511CE01A98E3:+vewfAbMTec/enBaWVzzCxiHw8WLTJvfAWzFmcOJT4Y=:EID_TheShow",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_086_Athena_Commando_F_Hardwood_B_B7ZQA",
    "2CB7CC414F921DD774957AAF4AD5F8FE:vi2xluuUw+pFj/tqqfvh7cS9Qnr8gQPEGX0IHyjZVp4=:BID_185_GnomeMale",
    "B229884F839295B4B9EDC380B045C64B:SVmPvZenzQ5Si17i8daUFyKoOGDtaH4YZtsF1s2XkxE=:MusicPack_084_BuffCatComic_5JC9Y",
    "5950552B5A52A97A433715A1FF107BC4:p9RBdPmk5295pRSg0+Ybfwy/kqY6HBYiJEAkvy650O4=:BID_171_Rhino",
    "7AEE99564551FF8EE98E6887410AE8E2:Cumd3/0knsdwt4bl7zNQw8MKmmIuC/4wYVfVtQq5d2o=",
    "23213D7D8F739DE37BCA56557073DA51:hmmf08PTLeIAJgxwHIFI131jzcy1SbirW6EzJtm1teM=:BID_980_CactusRockerMale_7FLSJ",
    "E48EFA857D8E6914B2505B05AADFB193:4AUdytefPzWNT8c11iGtU4xcGNWEgzpMJbxTjUq3NS0=:Glider_ID_241_BackspinMale_97LM4",
    "E47EFA3166A5D7B35CEC27B19AC66AE5:JURSqAHhHK6YqLP5rKhCO+SQ2oql4NqJaoaeNGtsrM8=:Pickaxe_ID_644_BuffetFemale_TOH8A",
    "027FFBB49E4285146DA1C5238EBB7DB3:yjcsOd6x9bWnX36cFx2Q3/zgHrCrnuWwiuZexrdcM8s=:Pickaxe_ID_741_UproarFemale_NDHS3",
    "F395571A36D2BD888861E61EEBD45AF8:D/35GPTIOKbdfmpxRJmHTkjNXcWv+XdSmTxQt6z1hvI=:LSID_274_Skirmish_PJ9TZ",
    "7FA066BD68EDBE54C44CEAF5FDE591AA:MqrhrL7xbe11CZPwz1pJTx8M8yUHGe/VHL29VKlKVKg=:Pickaxe_ID_771_LittleEggFemale",
    "0EC19805A48534C8892FA21C75024971:WcebSI5r6bMgSAbNd8Ob187rYmIJFJciobdyQciRiSc=:Pickaxe_ID_268_ToxicKitty1H",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=:BID_876_SunrisePalace_7JPK6",
    "BA6DF4F82C5CAB3CE1C51156BFCACE71:SDOlhnlP1SENGT+SrYUqeGIz0TkgoM7dQjfmfxegb1o=:Glider_ID_176_BlackMondayCape_4P79K",
    "F6838AF4144E8386A184FBB0823C15D0:IjzqnnHjZ+r6WC4He/JawOyR7LxeMbm5880cDGDr2eU=:Pickaxe_ID_174_LuckyRider",
    "B8F307A56B6EEFACD6250B2E60A24A4C:ayYSM667dKzMIvm8ZUY0F+FNlvNsg4G2RMIgi2fPf8k=",
    "09D84C411F2EFF940F5D462000CA5BE0:6Djlf6/XCCTMpI4KbNEHN4X6prgcnfQtru+z+RTHs2s=:BID_736_DayTrader_QS4PD",
    "C6F7AEC922E28FB25AFBC50442F57877:qJNZNWzxSxvlrklYDsNkZek9OD8kGV6lI+Hfmm+k0gE=:EID_BluePhoto_JSG4D",
    "552DB214510DE1E24F08920F80B0AEC5:GP2CYv9xYYDf6bOnpgm0fnOXa3iI0acXH02ZIaHAElg=:Glider_ID_306_StereoFemale_0ZZCF",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:Pickaxe_ID_326_GalileoFerry1H_F5IUA",
    "16FC688AE41A3E3C518F4DD9F9612EE7:Jd7nRLx/FoonA2dUjtbvJVk3nJoNq9LTedk3u4EdFS8=:Wrap_044_BattlePlane",
    "D517F2A448CCB9B47E5004894BC62ACF:qOdQUR91sysqDRELOgz/YVZ7Piae8hqcrnYW90fXtvU=:Pickaxe_ID_680_TomcatMale_LOSMX",
    "7B1151E3094646DFFD37B6492B117FDB:4WxNHdTgHDEpGjzIV2XIjGO41kyiwggFQpdq8y+o1jY=:Pickaxe_ID_577_TheGoldenSkeletonFemale1H_Y6VJG",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_950_Athena_Commando_M_Football20Referee_D_MIHME",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_944_Athena_Commando_F_Football20_C_FO6IY",
    "5738A14C7E45E1B405CEF920829CB255:xZHlPTz/dxNahrp9IqTZ+tjOZSYMxQb9KZFXlg9N638=:Pickaxe_ID_330_HolidayTimeMale",
    "4C546A04EB0E91B7EB4449B672B63900:RhtdrUqq3N21E77X7YatI4oX3wLYyvFH5Wm+eaUX8+w=",
    "A0926AD8C6EDE29250AC4A0A93156E7B:keN/yZ7qnvcPZeIflsked9TAT867gbPgmnG1QdlSn3E=:EID_Donut1",
    "A0926AD8C6EDE29250AC4A0A93156E7B:keN/yZ7qnvcPZeIflsked9TAT867gbPgmnG1QdlSn3E=:EID_Donut2",
    "F4729DF9DB149229267F9389E3C95851:DCXGOUUTWG8jFuEryO+32mXKJsQgQe+Fp82u7mHiYFU=",
    "36126C339CEBD31F23562CDCC5DFDD4D:cuLUN7oD/p5BSxuk6pKGY6KtlhGInVti36sV6zSv1n4=",
    "EDF724493161095DB54E9613C243A355:Yp7dsOYO778G7uRZNYhGag2diT70vhu2hAWvkzvtHjg=:Pickaxe_ID_796_IndigoMale",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=",
    "566C4D92AF66F45DF5E2D7EB43CC27AE:EuAYwU5tQBXzGoSj5BMc7S5yFfe9wZ2qrzx/hIHpnqw=:BID_629_LunchBox",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:BID_427_GalileoSled_ZDWOV",
    "F6E92DDBC70C8184E837D31905B2F2A7:UCSPatT+yv3YH2x0Ks+2GSXhSSu+3ZvZs6Lai3oOi0Y=:EID_RuckusMini_HW9YF",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_234_Athena_Commando_M_Grasshopper_A_57ARK",
    "5A1170F589134C4D68AAA2B5AA6EDA69:bfro7s6Qtde/H7C4zc6MJdpua1mhem8HywLluxBLDrg=:Wrap_298_Embers",
    "BE2C3EF59AB81D812AF5B8153325998F:W7NoICLZt9L2d7XZ5dT9gtI80MyOizk7uA9LtwA/Edw=",
    "919FDAB2FDB531820404333B27DC7B06:W9Csp0y6agsgcQXlRGvYUpPGPImNdFfBsZ8yQoUEdGg=:Wrap_092_Sarong",
    "28C5CD0467F2271365DA8AC4DE122672:I1ujTTKWOz0A5LcFiCwKJXQl9bnMpW9yhvY13UaWo1Y=",
    "BFE1F518C16A9F061B140D829ADDB0ED:bHkPYjXd71vacoJ4IisL//zEyVLFh+Di8MUqV9KkpFU=:CID_A_139_Athena_Commando_M_Foray_SD8AA",
    "C348806ECD35F176A5C50306B0A07DB9:x8+m/v+Cn55R+CIZrsqqSKxa5JpkQyQGeLVTJ8evrpw=",
    "0DD695EB05DDF1067D46B2F758160F3E:H8eacvW3rgmZFvWGGwXfojcIBMrQUL+FJQ1x3dzzVm0=",
    "BAEF248980269F569C6E1FFF2B885DF6:2b6DQGIcab1r7zsw5j3MR84iDmt0g1XBquxJVR/8GxM=:Pickaxe_ID_302_TourBus1H",
    "D47DF51158673BE6CD4D32E84C91DF7F:+EzQK4ojNk1DqxceQeArAGZhQPQyuQBKX4gVuGEqSxM=:CID_632_Athena_Commando_F_GalileoZeppelin_SJKPW",
    "6537263AA4E53B6A7B7D4AE3DE12826C:6WOQR0kXJWBJ4miykyUSj/hcH4u5JTSFpBTwaIeIFxQ=",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_955_Athena_Commando_F_Football20Referee_D_OFZIL",
    "172B237342C2165A212FEEAC80584DD5:7bGmK+J89yojl49SMoQKA+Zf7ZZ0W3OatE6KZYlGPnU=:CID_254_Athena_Commando_M_Zombie",
    "504BC0A80EE72DFEEF9CB7EE3FFCE163:eToIGihi0lTVTcHietksl1e6cHBf5h30aYO5YXpWXY4=",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:LSID_404_Gimmick_GXP4P",
    "CBFF239A1792F25920D863F223368B54:J3N3cUH3M0R3uyzkE0qVK/SouxC/X6VEswcoWb6ViL8=:Wrap_071_Pug",
    "ED088B11311A599D6225CE85545F019A:1NMRh4JMXRL9XW8Kb6zo4/F10dwLJC1+kPm6D6DudCE=:BID_832_Lavish_TV630",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=",
    "D47DF51158673BE6CD4D32E84C91DF7F:+EzQK4ojNk1DqxceQeArAGZhQPQyuQBKX4gVuGEqSxM=:Glider_ID_189_GalileoZeppelinFemale_353IC",
    "5D6562F1EAD89513C82C2F37A24E7F82:I2c+SQCdDvJpC6z1xniRT+k41KAp0pla+o/H68oXFLQ=:CID_649_Athena_Commando_F_HolidayPJ",
    "5950552B5A52A97A433715A1FF107BC4:p9RBdPmk5295pRSg0+Ybfwy/kqY6HBYiJEAkvy650O4=:Glider_ID_102_Rhino",
    "E7D27A42770632B7A50BED813D9B1696:bxADNk9dmPNeKEuSvJl44teif6sHvs36yBZ55E9fhwQ=:Pickaxe_ID_775_SnowfallFemale",
    "F395571A36D2BD888861E61EEBD45AF8:D/35GPTIOKbdfmpxRJmHTkjNXcWv+XdSmTxQt6z1hvI=:BID_702_SkirmishFemale_P9FE3",
    "DC060EA83FE6F9729B19150E40C7987E:zW3d3QhtvhE+q3x/P7/BA9JvyoruVmeACdKt6RPxyLY=:Pickaxe_ID_769_JourneyMentorFemale",
    "7F5ACEFE3F67BC0CCEB59A4E8EB82BAF:iDG2HB2LypEtzw5/EjKVpJmQ1o30BE3nVv01rOTyq64=",
    "63722D44ECCA0F4178B85F5A6BC4C31B:j42UL0bmfBkli6Aj92wWABwFby5rAplP/Ac6nh9kRvA=:Pickaxe_ID_661_VividMale1H_ZN6Q0",
    "EBFE6788D367D741AF0A4FD098CDFD39:FAeJTGyT49P+dQOmKx+lMYVAxu7qtIPlqSaLAR85zqI=:EID_AssassinSalute",
    "3AC8A6B5089F55E17E00AAD8AC3C6406:TlUSkJe3y85fW83rHMy+XuqcZxQduXcB8yftpPoiDvo=:Pickaxe_ID_399_LoofahFemale1H",
    "ECE91B4E506E33C16FA440F4B4313824:dGr4XbhLD3sf28Y3Tawke4Gr/TpwEA5xPOjhgi+ZAKk=",
    "8DCAE39C7D9690E19F52655F02C613B2:ZZHbiVsbXquLlrtNVHtryLS3Vd1Ego8/8tlDpeUCgfc=:BID_336_MascotMilitiaBurger",
    "06B9F77E165673FD1C5FF5099F43D1F3:Bvw6h4GKOLjC/wFgHQsiLePbBZhtPiNhtr5keDBse70=:BID_421_TeriyakiWarrior",
    "FF5A507BCC4519B928075C3DF4603E8E:EVv5b8WFOYZlDUGRqb8YUS1WbIbbT8TjgoBWEQr65zs=",
    "09BC93B3441ECBAC30FA23BBEF59CF89:3CHInj+JfLspiVCNDY/GTZ4Pn52nWFeA4qYI0SJv2dM=:CID_302_Athena_Commando_F_Nutcracker",
    "CB34283BE466D2421549051C400A9E52:rTmyRzx7oSiBWRv52itbCbAFlLIy7W6dZoDcfyTMmyo=",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:SPID_403_Lyrical_BoomBox",
    "74AF07F9A2908BB2C32C9B07BC998560:V0Oqo/JGdPq3K1fX3JQRzwjCQMK7bV4QoyqQQFsIf0k=:Glider_ID_158_Hairy",
    "464F39FB64FAF4AB6843449EDD0BE3BE:0yYMEXLHteghUwUW+SThzKXltdNzvA42CssFpAXgxFA=",
    "ECC9E1F04B18E523B2681C2037A17B56:AoeVhWzK5zFpeJ2yqYKkTaRw4vo9162/EuipYvC+jxA=:CID_602_Athena_Commando_M_NanaSplit",
    "32E8846645441197B80CF8B1C86B01A1:cwJgOQhsrscdiFfLHzS9WudnE9mBMH/C/SAyX81B2fM=:CID_311_Athena_Commando_M_Reindeer",
    "B9E5ABB4D4F783F13E7A32B971597F03:HGWfy8LBJu12s5HZeYTZDqP2EI3dJqPXupxd2AzYdUI=",
    "C7623A35411F3D5FBDE2688C7E4A69EB:qAi49mUKsB2dbfbtJWDf3yO2DfRStA+Ed9XgDjC8Zaw=:BID_190_StreetGothFemale",
    "234D1D3D37EFF3322E44B31200C1ACEA:T3lGoZ3JIVg7vasMQCr3hjyRo8x+HS1Arh43XvdUKss=",
    "CBAC886CCED55EEAEDC0D4BED9588035:+5bLkb9JJIJBPrVxzvfhb0CkKU4ITf8SJRRG14UzyfI=",
    "BA490514EFDA436A2679E381BD558AA3:3KBKxBOi/52H0feJ/ijKxRHk+lF1zID0uIpjd0T7/Bc=:Season18_Haste_TrickShotStyle1_Schedule",
    "35C2B057E5168DCA74B6F1DDAC745E60:73haJlY3S0TVmH0ELxyw6p5FzFRrITWqOmobH9F2Mq8=:BID_936_KeenFemale_90W2B",
    "D14FDB2BB2FB7746797F25470913BFF1:CQDgIxcNnAoUboQnjafZAYvV7UqX+NefGTXFd3m+oFc=:BID_907_Nucleus_J147F",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_A_004_Athena_Commando_F_GlobalFB_D_62OZ5",
    "D82BF0194AE18598B8B08491E2256E16:3ENJiAAhBVgbroE9WbkjWK5YqL8vzJ0sFKhadRKcQjk=:CID_255_Athena_Commando_F_HalloweenBunny",
    "E46E6578D28965DB74B642E1CB239A5D:Dg3Oqkcno7QuLDGdi4N4VWSMSAd8bILyJT8Gh0PYjj8=:BID_758_Broccoli_TK4HH",
    "F3A99CD0D4F58EECEEB0D112506AD846:ZZtCRPcKk6itVryDavp7uZFIXiZF5CW0O9b+8Zt2Oag=:BID_820_QuarrelFemale_7CW31",
    "772E01C212E9A77A501AF954ADA90B09:nQ4i6bbmbGMzcq8iyjoM/BGUbX2DSIJRAZ96/qaOf/Y=",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:Pickaxe_ID_733_SlitherFemale_M1YCL",
    "0CAB99F6E84D4E4C616B895E243F3B67:DWU31IKjnLsEt8sBBDfWQ3DPbZzpJ2JmfbxYdQ8QPZI=",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_350_Athena_Commando_F_TreyCozy_B_8TH8C",
    "FC4FC301558D3E9321A55180263EB17B:OXujupiNRNT6+b1g1dg2IXPtdQyfoNPUuvtgqfXnlEY=",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_445_Athena_Commando_F_BannerD",
    "E7D27A42770632B7A50BED813D9B1696:bxADNk9dmPNeKEuSvJl44teif6sHvs36yBZ55E9fhwQ=:EID_Snowfall_H6LU9",
    "C23FA9BDE9342B508B8AABBEEA6699A2:3mRtSSu9PTBlC3NpGAQcFent660Ptni4HbGX+Zj1KIA=:Wrap_404_CritterFrenzy_SNXC0",
    "72CC2893A6B672F3854F36629B770774:0BgQgKZRRuPFEoqn7CxZVhLBOfpCE3qLKGQlZc+SA80=:MusicPack_112_Uproar_59WME",
    "63516700C5CFA6F1BE71B29214957E33:eR9Otw83jJyrj808CkqElVYzlXztuc14/u2pDtPtooQ=:Pickaxe_ID_223_Jellyfish",
    "5C0BC5E8819B8968CF25C60885F0CB5E:E52Ld2gtMzMFUMkdMpjNWmEHEgr1qnH+iliH2ha27dQ=:Pickaxe_ID_275_Traveler",
    "419008D696C27533DFEDB08BE4F6C8F8:5I7VZNrdz8oZdzk1TTNCKkZXokilbXLFy7dQPPPlpuo=:CID_A_314_Athena_Commando_F_NightCapsule_TAK2P",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_352_Athena_Commando_F_TreyCozy_D_2CLR3",
    "258AB620A71C14508FB6614003DCD34E:fjPUuwSZbKfHlvSh8RMyVjR2SVTcVrGNpWvyjNVQ8Xw=",
    "C66F354B49A4389E7636C1BF53CE8D97:BisMzLIPd3AuIv431ryh7DE1h1HYe/NdhBC0wkLq/zQ=:BID_204_TennisFemale",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_307_Athena_Commando_F_Slither_E_CSPZ8",
    "1162D72490AB6D040106B276D14B20D2:UoybfdmMPLyXmLpTKBZB0sqSOvXnKHabF/nv5olkuoQ=",
    "6EDDE286471D1369B09E65A6B02686CF:2MDxhxeBxx/dN+Q/lwCG+poxzpStEQLDM0L80CoaEG8=:Pickaxe_ID_152_DragonMask",
    "E8585F83E40CD4CF0272EA6012055A97:4LrXtLEBhL5JquAu4/kq1Dghb4/355YROt3ciXg+ysE=:LSID_429_Rumble",
    "5D6562F1EAD89513C82C2F37A24E7F82:I2c+SQCdDvJpC6z1xniRT+k41KAp0pla+o/H68oXFLQ=:CID_650_Athena_Commando_F_HolidayPJ_B",
    "E66DF3CF1BFE84F0B1966967210DD6D9:DGLD/iFbdLvaiZnAfWrHIW5yJ5SfsQQyjeW2IBQe+zw=",
    "6B91F0DFD2780364EC6FC5E531665208:sBhYta4JrxcssCLVBkFXeJpKa7gQKHepqu9840vo6h4=",
    "01FC97F8787B82E027EC64661E0D36AB:Mh1l2LJ3YrgaZtg7sRTd8XeBkVcyA3i089gZKkTr1gM=:Pickaxe_ID_783_CactusDancerMale",
    "5332028CC33C98BF747EEF82B0384D8C:QxdEIZba2DLRx0jYKm8UpIk/K6eKuclfvDSTllMLLrk=",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:EID_Galileo1_B3EX6",
    "BA6DF4F82C5CAB3CE1C51156BFCACE71:SDOlhnlP1SENGT+SrYUqeGIz0TkgoM7dQjfmfxegb1o=:EID_BlackMondayMale_E0VSB",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:BannerToken_015_GalileoA_0W6VH",
    "72FCE9EE6B90885970CBD74AA2992B68:UvFcOwG78Bx6kVWWHd3NsSarAeWZAht32WLeqs0Opoo=:BannerToken_003_2019WorldCup",
    "82669F5A2F9B703D1A6BEA3BCB922D7D:Leu9rrDPaqZd3izIU+IKpFcP/NNcqSncLkV2lapQL6k=:Pickaxe_ID_221_SkullBriteEclipse",
    "08788A9DA34F4164ADA4F09FBF698CC3:DlhRrdBGDNADUAMRj4oAUwwR2j33Nr2ZNg2CU3i1/Pg=:EID_Quantity_39X5D",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_349_Athena_Commando_F_TreyCozy_Y4D2W",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_347_Athena_Commando_M_TreyCozy_D_OKJU9",
    "BE2C3EF59AB81D812AF5B8153325998F:W7NoICLZt9L2d7XZ5dT9gtI80MyOizk7uA9LtwA/Edw=:BID_872_Giggle_LN5LR",
    "9944BE1C4E9D73E4FA195380EF0B7BBB:LQxoRi0ktKvKMLk6hauL2Gzs6zf5bcEk3mgfX0We/uc=:Glider_ID_122_Valentines",
    "340C0957F37B985956E74242A9487B5A:CiISJuNPymcbI3tJAxIaNfGCcHBr1ttSFr++4c5DQx0=",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:TOY_Basketball_Hookshot_LUWQ6",
    "E8585F83E40CD4CF0272EA6012055A97:4LrXtLEBhL5JquAu4/kq1Dghb4/355YROt3ciXg+ysE=:Glider_ID_365_RumbleFemale",
    "88FA70760D757D80F661FA53B4762EC2:7OtV76cpyOq9dNeM5PVD8TOdRcPx1K3weEPXzlCugu0=:MusicPack_106_Bistro_DQZH0",
    "30A11EE8EB62BEFD4E9B09611DB13857:YVeVPXcP7UoJTp71ZXpGNdPVzmjnRyymcUpsNWYXfRs=:BID_506_DonutCup",
    "30B53CD6A14D4EE40C71C60E9EE0DD93:RFvcbS74Q3YPnQpxUbhafzeiqVYKv6Fxukfi77h2TdI=",
    "29DCC9CAE821CAF43197545BAFB9CDE1:i9A5h7EdSe56nquoLOHdmUB6HKB50OzHpQMLXDjSQkM=",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:BID_851_TextileKnightMale_MIPJ6",
    "604C6242EB2BF301BB5D4BC6E3AC5A8C:Y7c2+dviThEDuVsG9kIOjMfnLdJUnPMbdaY5gKiVki0=",
    "1050DE04C393D98D22D50388175B4834:aFzCQrL5V9QxBU7hrblnr3x8oWjKs7MjQrua/tyBEQI=",
    "419008D696C27533DFEDB08BE4F6C8F8:5I7VZNrdz8oZdzk1TTNCKkZXokilbXLFy7dQPPPlpuo=:CID_A_315_Athena_Commando_M_NightCapsule_B31L1",
    "027FFBB49E4285146DA1C5238EBB7DB3:yjcsOd6x9bWnX36cFx2Q3/zgHrCrnuWwiuZexrdcM8s=:LSID_398_UproarVI_5KIXU",
    "7FA066BD68EDBE54C44CEAF5FDE591AA:MqrhrL7xbe11CZPwz1pJTx8M8yUHGe/VHL29VKlKVKg=:BID_976_LittleEgg_Female_4EJ99",
    "FD0C3696948675DC3C2CBF5098D57D0D:rBWyTh/AVyZxi2oiQxM/OeD/HYZOSdVidEQeKoowV6U=",
    "545B9777127F4BE242F802C627356B7E:RNI/KvLEXcGoGnk3/AKaYbyJmXMtQl9Zmvl8ErePB4g=:LSID_360_Relish_FRX3N",
    "4F53A11AB9CD08FA18D603BF29415366:mq1giTyk7GAqrpXphg9STetDQnhFBS5M1SYEHM7uYqk=:BID_251_SpaceBunny",
    "B229884F839295B4B9EDC380B045C64B:SVmPvZenzQ5Si17i8daUFyKoOGDtaH4YZtsF1s2XkxE=:Pickaxe_ID_588_BuffCatComicMale_12ZAD",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:Pickaxe_ID_491_YorkMale",
    "545B9777127F4BE242F802C627356B7E:RNI/KvLEXcGoGnk3/AKaYbyJmXMtQl9Zmvl8ErePB4g=:BID_873_RelishMale_0Q8D9",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=:Glider_ID_324_SunriseCastleMale_2R4Q3",
    "768A95DE7B657B7B23D5A0DE283EB49F:JLLAz46a7wo2rADQvCkbp4IbKexr7J5bBr6d6toSn50=:Wrap_049_PajamaPartyGreen",
    "F07BE27DCEFDF52818EE7BA2CD9CA504:lc47A/VahaBWJLQY4V1YyjzJPI5xVErInDaqdwPjv2g=:BID_255_MoonlightAssassin",
    "2CEE3C1783B9E41EB66238BAD32EFF23:udlTL9abg8LIGytWpERMGVEpPrj9io23R2HbINHtF3o=",
    "86588ED13DD870C5FDBF91B3C739D156:HFqg2udb5qqasLf+D2jzfRahu3HgBZWZN2AvnSUIIzs=:BannerToken_002_Doggus",
    "CBFF239A1792F25920D863F223368B54:J3N3cUH3M0R3uyzkE0qVK/SouxC/X6VEswcoWb6ViL8=:BID_276_Pug",
    "E46E6578D28965DB74B642E1CB239A5D:Dg3Oqkcno7QuLDGdi4N4VWSMSAd8bILyJT8Gh0PYjj8=:Pickaxe_ID_597_BroccoliMale_GMZ6W",
    "16FC688AE41A3E3C518F4DD9F9612EE7:Jd7nRLx/FoonA2dUjtbvJVk3nJoNq9LTedk3u4EdFS8=:Wrap_024_StealthBlack",
    "A2A3968C8EF4EA9F7979BC1FC57B871D:xVURN9OBgLtbyK0ZR4bqMgsZpL/SJjlIXf1WGEpfd6I=:Glider_ID_139_EarthDay",
    "545B9777127F4BE242F802C627356B7E:RNI/KvLEXcGoGnk3/AKaYbyJmXMtQl9Zmvl8ErePB4g=:EID_Relish_TNPZI",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:EID_Gimmick_Male_8ZFCA",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:BID_952_Gimmick_Female_KM10U",
    "5AD068EB1D56D87706E44EEB3198CF1B:o9Gp08KD/vgq3RTrUbfGJk7rlfUqZMxoRKPiwvdVkXY=:Wrap_431_Logarithm_F8CWD",
    "E0AEF4894E1283946745F7902F7E105A:7MXKJEs903nNbT1oFzykxoHbQNDnOBm6yfadj+mtBDA=:CID_A_342_Athena_Commando_M_Rover_WKA61",
    "604C6242EB2BF301BB5D4BC6E3AC5A8C:Y7c2+dviThEDuVsG9kIOjMfnLdJUnPMbdaY5gKiVki0=:BID_772_Lasso_Polo_BL4WE",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_444_Athena_Commando_F_BannerC",
    "C1C31115267D6802AD699472D2621F25:zAyelFy6RcyGIW/9z9IvgEbmRW9pdAytvgBIPb1/kdk=",
    "D7EDE7B4CE393235BF4EB8779C55D5AE:tvYJfExMmwMpbWXSe8bxfGkpl1wcJv4B/RBjd8qWcZ4=:Pickaxe_ID_728_OrbitTealMale_3NIST",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_951_Athena_Commando_M_Football20Referee_E_QBIBA",
    "34DD24ED0CE62244E7FFD27EF4C29EB5:jTgMUc1ciLKwXF/PqyFJl6s9Iw5SXYHKiSThOQhG5TE=:EID_Foe_4EWJV",
    "C76299772B1BE272260BF3396F83FC1E:uiBDMtwYhdxktbqTrhYkzEZErlBp5gBtkLM+QFDouT4=:Trails_ID_102_HightowerVertigo_G63FW",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=:Pickaxe_ID_694_SunrisePalace1H_SDI6M",
    "63722D44ECCA0F4178B85F5A6BC4C31B:j42UL0bmfBkli6Aj92wWABwFby5rAplP/Ac6nh9kRvA=:Glider_ID_308_VividMale_H8JAS",
    "0DE6839DE97A78F987D7A34D644BB3AD:ZKZ1+Eb+7CpzfLHMqihYVN9+gVQobqBYQW5mh8I1KpA=",
    "AAB934D179F489B8084EB057031AB845:oJF2EGCXkWP7B1BVK8i4yJzvNtkwXozjZJZv7ZznEEA=",
    "35DDA69DABF1DE5826348A3CCD0DFE5E:CfhL+/n+phBF7TV4Qpw4Qhqrd6g3S/Gq2sU5n0FiH6A=:Trails_ID_059_Sony2",
    "854D0D9F4EF33FB4410CB98340952245:wYzInzYpL5IB6dN+rCo6196KgGGo3E/rNeOf7Paizz4=:CID_304_Athena_Commando_M_Gnome",
    "E50209164841E1829F672AB1B33D069F:1EMTmCTA4cO1QMoLu+RWAGd8Rw4FQdAONKvDwfQeNV8=:CID_333_Athena_Commando_M_Squishy",
    "552DB214510DE1E24F08920F80B0AEC5:GP2CYv9xYYDf6bOnpgm0fnOXa3iI0acXH02ZIaHAElg=:BID_819_Stereo_TE8RC",
    "216D955070ADAF10973BD156897472C3:MjQh55OvnJCoVMQzMU4C/1NF3FWiXDXnJ6G/EcHfUzo=:Pickaxe_ID_202_AshtonBoardwalk",
    "E8585F83E40CD4CF0272EA6012055A97:4LrXtLEBhL5JquAu4/kq1Dghb4/355YROt3ciXg+ysE=:Pickaxe_ID_791_RumbleFemale",
    "B1B800E199A6D4649287C11AE89F67CA:3udFXffIw3c7eM5hljF5mJQA36FbW2PeF8Gx1TcD1vc=:BID_257_Swashbuckler",
    "41BDA9510489C841C335EBFA5E233CF0:NceSf4zJLAR1Clh17nKGtBrw62kDRE7tJrodbJYMbU0=:Pickaxe_ID_193_HotDog",
    "DC912741D5C6F75E4B0FEE33D7E3ECB5:0J6tWhEx0Nxw49VokIyykSs5sL5aFPgk2QJn9b5bAi8=:EID_LetsBegin",
    "06B9F77E165673FD1C5FF5099F43D1F3:Bvw6h4GKOLjC/wFgHQsiLePbBZhtPiNhtr5keDBse70=:Wrap_176_TeriyakiWarrior",
    "AC44D9C67B1FB24E70D94C827FC465AE:VrHcqJ9hMMqZicx3kS+qFfNXexXR/QA1/1bM+DwgqMw=",
    "EFF73F810AF0A5536912C24E91399CBC:vlBHa/jN2WecgWXwAEROAGpwbobQfMtBU24wD7+gM7k=",
    "30A1FD89B2D3C155DAF14852A39BA97F:C0IwuJFw9v06OF8XthOhzUd3nHOTCII1gmx/7eepmDo=",
    "CD6B95C728B11810F8EE4C396D02EFCA:Fulo/BAgbJwmOju1xu/05XnxLDbenI4bDEb2rUyf5hw=:EID_Psychic_7SO2Z",
    "8A6DABC9AF8B5FE521D365DB605D0AE0:T721SqBTncYsd8Gej01RnLX6sEaCgJoILnRauHaJz+g=:CID_429_Athena_Commando_F_NeonLines",
    "1DF43E667862B117F72B5F39E750853A:Bhjx3mmVxhvadK5bkT+W9RJ0XAaMHawCnf8MfXIpABw=:Glider_ID_150_TechOpsBlue",
    "6D85E82539341B90944E84FFAAD872FB:mAiBk7KbE2Dnr+yVFyJK1yAwv2eWb+yANFH0z2krQkw=:Glider_ID_156_SummerBomber",
    "AFCCB7C08EC6957EEDDAAD676C3D3513:MuovEXob241ie6/RP76ImUk+MExLdl+bszvxCHNtg0U=:EID_TwistDaytona",
    "7E9E6546A8C7109E9966F9C010D794A7:/hJU9SIxIewJ7taimArAwTbbuGG/4THrKvMElcTMzI0=:EID_BurgerFlipping",
    "AE9F7B3419C7FBD2414D72E2E1C8A7BA:kpIotniLp60tWfbBitDUrjw6gmJ2Swl+YT3QAkecpRA=:EID_AntiVisitorProtest",
    "5D6562F1EAD89513C82C2F37A24E7F82:I2c+SQCdDvJpC6z1xniRT+k41KAp0pla+o/H68oXFLQ=:BID_441_HolidayPJ",
    "23213D7D8F739DE37BCA56557073DA51:hmmf08PTLeIAJgxwHIFI131jzcy1SbirW6EzJtm1teM=:Pickaxe_ID_778_CactusRockerMale",
    "F6E92DDBC70C8184E837D31905B2F2A7:UCSPatT+yv3YH2x0Ks+2GSXhSSu+3ZvZs6Lai3oOi0Y=:Wrap_387_RuckusMini_6I5DM",
    "0EC19805A48534C8892FA21C75024971:WcebSI5r6bMgSAbNd8Ob187rYmIJFJciobdyQciRiSc=:BID_345_ToxicKitty",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_913_Athena_Commando_F_York_D",
    "1AFD764881D1E33FDAA65707010712AD:cbKyY3ux6wrdiWz2dXJq18KJaAYmUgBZ2aZsfz1UE3M=",
    "7B1151E3094646DFFD37B6492B117FDB:4WxNHdTgHDEpGjzIV2XIjGO41kyiwggFQpdq8y+o1jY=:Wrap_356_GoldenSkeletonF_FT0B3",
    "5E2A3EE7CE3884E31F58D83485D8B122:U++ePc5N62iMtEbjrJGSwNCaWeR6UoNMtWS85zJHwns=",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_241_Athena_Commando_F_Grasshopper_C_QGV1I",
    "00EEB0CEB7585E8C69F90EF8534CA428:gSddavzl1D9mSi3KgCoXjX3eb5Dg9Rqh2C1pt6rD5rk=:EID_MyEffort_BT5Z0",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_346_Athena_Commando_M_TreyCozy_C_7P9HU",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_A_005_Athena_Commando_F_GlobalFB_E_GTH5I",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:SPID_333_RustyBoltCreature_ZGF9S",
    "77B485EBF8E72CC8CD19F8646A6D0491:SXUHJQDuxBGv0PzDtuVsDxNyubG/pgH9s9FMvimS0YQ=:EID_Noodles_X6R9E",
    "EB16EA013B751792698E05435797C1ED:y9JgD812Io4mbaJ5i533Ts5SSfyXaGM4JyoimjP+i4M=:BID_246_BaseballKitbashMale",
    "97D5F3D0A78B050F427B5B300FC03EB5:Be+eZS6KqUc5Lc2iF4YAcLEe+S78nuLCK45HF/dDGDU=",
    "5C0BC5E8819B8968CF25C60885F0CB5E:E52Ld2gtMzMFUMkdMpjNWmEHEgr1qnH+iliH2ha27dQ=:EID_AlienSupport",
    "000A05AF03AE10ABB2059F29ACBF7D4B:3KrmPu2Ha/X0oy/MWd0a4O8JhJWli5MdtfG4XzeB248=",
    "5950552B5A52A97A433715A1FF107BC4:p9RBdPmk5295pRSg0+Ybfwy/kqY6HBYiJEAkvy650O4=:Pickaxe_ID_127_Rhino",
    "88FA70760D757D80F661FA53B4762EC2:7OtV76cpyOq9dNeM5PVD8TOdRcPx1K3weEPXzlCugu0=:Glider_ID_319_BistroAstronautFemale_A4839",
    "A3254C97AE656A9B7301225E06E6B58F:tnv0g+8KyEy6IGYAl1ssmNI0uYT2fEP2twZkRnbIhbY=",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_940_Athena_Commando_M_Football20_D_ZID7Q",
    "F6838AF4144E8386A184FBB0823C15D0:IjzqnnHjZ+r6WC4He/JawOyR7LxeMbm5880cDGDr2eU=:BID_232_Leprechaun",
    "2FE8DBD09F14AAF7D195AA73B9613792:KwIehLEKaCSJb5X/WcQ9IULKkz3G3M9f9Z5Jgi9hYUU=",
    "2B245B0F4DDB6AE9929DEDA081BEA512:lVz6HM71lNhCrT167xXv2wjekx+NqrJcy15i2+w3FdE=:Pickaxe_ID_152_DragonMask",
    "A7D34E80FA70CDD2F367DBEF93B98467:KVErbMXsQqx7dxrZp5Ara4OVlA17pc29E2SZlFNipPU=:Pickaxe_ID_218_StormSoldier",
    "315315A3A02AD685390B8D5878BE527B:Te5Ku+QdVzpXNd0B8XN7T/e1YaV5PyR04Z9yhfMFatc=:CID_465_Athena_Commando_M_PuffyVest",
    "D50ABA0F48BD66E4044616BDC40F4AD6:GNzmjA0ytPrD6J//HSbVF0qypflabpJ3guKTdX4ZStE=:BID_115_DieselpunkMale",
    "0690C12E471B0A42CD02549ADA662D64:Ntgy1QBz7O7CswgzsqOYwoMahjG3hGmk6/Qh4/rs+dM=:CID_273_Athena_Commando_F_HornedMask",
    "EE0C67580F774526D46A64757F5DE77E:qRq1DPp8GnsFZSUYR1PJKeKm5YXAg3Kyd5Y+pjtXZyU=",
    "2301C91045828DBFCDD966BE1AFE22F7:zS44RFNKoS6+WDSfin7CebOMjLH763+OGG5wjTrCosc=:Glider_ID_097_Feathers",
    "9944BE1C4E9D73E4FA195380EF0B7BBB:LQxoRi0ktKvKMLk6hauL2Gzs6zf5bcEk3mgfX0We/uc=:BID_214_LoveLlama",
    "D24B0606E503B97BFEB8EF12C6F1340B:wCF6GzuxQSxUX9I6eFwGJL34gU7YEPTKrZOOL3sPL3o=",
    "E8585F83E40CD4CF0272EA6012055A97:4LrXtLEBhL5JquAu4/kq1Dghb4/355YROt3ciXg+ysE=:Pickaxe_ID_792_RumbleMale",
    "5E15C5486CE8E539552D4D3E7682F9E2:+L/tTz+woDFZJEvtxfq8m8tNI1R72sYK7rnYr7sHTis=:EID_TeamMonster",
    "E582349045884D5CD6A5518608336738:EuwTH/5P/6QUfbA3n5kc0wUYy+sI56+mNDYhIqheL4E=:BID_142_SamuraiUltra",
    "F6E92DDBC70C8184E837D31905B2F2A7:UCSPatT+yv3YH2x0Ks+2GSXhSSu+3ZvZs6Lai3oOi0Y=:Pickaxe_ID_659_RuckusMini_O051M",
    "D517F2A448CCB9B47E5004894BC62ACF:qOdQUR91sysqDRELOgz/YVZ7Piae8hqcrnYW90fXtvU=:BID_863_Tomcat_5V2TZ",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_302_Athena_Commando_M_Slither_E_U47BK",
    "BA6DF4F82C5CAB3CE1C51156BFCACE71:SDOlhnlP1SENGT+SrYUqeGIz0TkgoM7dQjfmfxegb1o=:EID_BlackMondayFemale_6HO4L",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_351_Athena_Commando_F_TreyCozy_C_A9Q45",
    "0882DAEC4F7823551C4955BA25B8AAC4:kGljCDpbMnCIfeo0YBLpBKDhX6nLlCaZRe62mSYSPTs=:BID_918_RustyBoltFemale_J4JW1",
    "E47EFA3166A5D7B35CEC27B19AC66AE5:JURSqAHhHK6YqLP5rKhCO+SQ2oql4NqJaoaeNGtsrM8=:Wrap_383_Buffet_KGN3R",
    "8566FD040AC2B245597E11D1F85DB4E5:SEoqoweofxmXfxu848wKn1UJhwU7oQ2w2F0lBst+FnU=:BID_658_Historian_4RCG3",
    "A34195EF9068F0DD323EA0B07305EA47:eYcw2YEjssIAsJMgaWYPQQCBFcRvvkj9WoRVV+P3cBo=:EID_DontSneeze",
    "BA6DF4F82C5CAB3CE1C51156BFCACE71:SDOlhnlP1SENGT+SrYUqeGIz0TkgoM7dQjfmfxegb1o=:Pickaxe_ID_276_BlackMondayFemale1H_1V4HE",
    "46FC5EBAD39CE53EFB215A2E05A915FC:H3gtdkEzT3Dk8vkwTTZE9oUDoJEy6vmfQj1jDo453gY=:Wrap_051_ShatterFly",
    "4969808C5315EFB4839F94626ECD600C:rdEEmKdvnm0+EXCNE8AaL3XOvVWfLdMVOfZYKj4Kzwg=:MusicPack_131_MC",
    "8AE930B0D623C1C2B3926C52ECF6250B:uwtZv87e9DU/Z1ZvYB7Pv4TdRQ4/ZRT9nYJCwYSmlbI=:Pickaxe_ID_605_GrimMale_8GT61",
    "D938886074C83017118B4484AECE11AB:wjHAHm00Vg6n2x5LU91ap0+SFX5ZXXBmax1LyX8Aips=:Glider_ID_287_Alchemy_W87KL",
    "2301C91045828DBFCDD966BE1AFE22F7:zS44RFNKoS6+WDSfin7CebOMjLH763+OGG5wjTrCosc=:BID_154_Feathers",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:BID_634_York_Female",
    "1609BAEA4AD6B664847EB5AACEAAD2AF:m2Yg+p6NDPR/POAPoG7bUCPabLTxGc/h8nrOEIwDx7k=:BID_130_VampireMale02",
    "486AE200BAEBA71EB6C477BE323066E9:3vS6pm2ep50Ab5lzNnGMluM0KYJFiUbp2MuBcahuiFQ=",
    "B77D921A94CDDAA841609065AE4C7BC0:SLDMLjxWpK+h1P4WNnqlixpWwujuV8OUZw+NoufV7sA=",
    "CD6B95C728B11810F8EE4C396D02EFCA:Fulo/BAgbJwmOju1xu/05XnxLDbenI4bDEb2rUyf5hw=",
    "6261EE20A79577BE9F3CAED16BE29CF8:539o4DrU0Wfl7SNWEO2im8/ZYoL7CBJOvz+3hN0cc5A=:EID_JumpingJoy_WKPG4",
    "59AF6C46ABB214024067564F69D6EA37:NtUgzeFVvkbyZQGRVdteWV61HjED9MXquqlVKHo3c/M=:BID_605_Soy_Y0DW7",
    "8A154454D5B98503B341742F927C2457:grJh5qYNlPy1eMO4+to3Moy+a6NCMnXyGSAFUKKWY5E=:EID_Downward_8GZUA",
    "95C6C2B37E1D15D60BB5C20D9D47BA31:exdH0xe2v+2t1wyoXpZGLX+iGDIdRxcQ6BG9iqi07Lo=:Glider_ID_368_NobleMale",
    "F395571A36D2BD888861E61EEBD45AF8:D/35GPTIOKbdfmpxRJmHTkjNXcWv+XdSmTxQt6z1hvI=:Glider_ID_277_Skirmish_9KK2W",
    "BA6DF4F82C5CAB3CE1C51156BFCACE71:SDOlhnlP1SENGT+SrYUqeGIz0TkgoM7dQjfmfxegb1o=",
    "A5A71DA2F913ED0FD001BBCEC58F97FF:gFC4LJXINTgSLc8Gd6tYuSmuLHP+4AthS6eF52C93M0=:EID_GasStation_104FQ",
    "01FC97F8787B82E027EC64661E0D36AB:Mh1l2LJ3YrgaZtg7sRTd8XeBkVcyA3i089gZKkTr1gM=:LSID_431_Cactus",
    "03FBE2522823B14E3BD161BBCDAE4A85:kvHfxKURiw97DzzEt5xAUxVMFfxGya3Xw3kI7ORGEgM=",
    "2BFECCEDD463D908C63438FD751529BE:u3hXyyjFecUwcUQIugiOjqwSJhnhy/cluvLBwlUhSC4=:CID_401_Athena_Commando_M_Miner",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:Pickaxe_ID_222_Banner",
    "A062151202F2D5FCAD103D17B9300CE2:JiiR0xFNh20CRLDWN/tfjaeoo2ybApd1hQB364/iuTc=",
    "D14FDB2BB2FB7746797F25470913BFF1:CQDgIxcNnAoUboQnjafZAYvV7UqX+NefGTXFd3m+oFc=:LSID_373_Nucleus_TZ5C1",
    "9481CF79929F97F77D8F7D2607B42A6C:E28flW2DKtXyXBh2I7qs7VFKBFSkpgjkEDWIruQfVL8=:BannerToken_001_Cattus",
    "BB59BEF60B72A241855EEC0FD63154D9:ZAQI6o6tkjRB6mh7VwOsf0x9DGyEAbGZ8qlUxS1fVm4=",
    "FD0C3696948675DC3C2CBF5098D57D0D:rBWyTh/AVyZxi2oiQxM/OeD/HYZOSdVidEQeKoowV6U=:LSID_296_Cavern_60EXF",
    "134343D31031634B122471F73F611CBC:zqtMGKxH4+Ydcx+1mHOb5DIMYxctpm2nKqXp8c5hH/0=:Wrap_076_CyberRunner",
    "8DCAE39C7D9690E19F52655F02C613B2:ZZHbiVsbXquLlrtNVHtryLS3Vd1Ego8/8tlDpeUCgfc=:Pickaxe_ID_251_MascotMilitiaBurger",
    "F3A99CD0D4F58EECEEB0D112506AD846:ZZtCRPcKk6itVryDavp7uZFIXiZF5CW0O9b+8Zt2Oag=",
    "E04FBD38CB934DB1363EF57C85E48F9F:E+/j7zhGIdHODfCdH2vh4rgGRYSssFpT/s6dlus9Csc=",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:EID_Galileo2_2VYEJ",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:BID_852_TextileSparkleFemale_X8KOH",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=:LSID_358_Sunrise_1Q2KG",
    "0E32ED911D1D1D67115812FB22317555:4qQbE3qtFL+oTEzvxYIwl2H6AsG7z1/3zNO9JEdHOd8=",
    "687E53607C7004988B05C9EE1BA99AFD:jYmAGdz5vAvDRIhrcVdrcCNIPEmkJg8L1vWs/HZ5Kr0=:EID_SmallFry_KFFA1",
    "498A4AB4BC3BFA9B055CDBE833C51670:67ndB88hm7gomLYiklekB5rGWrcr8RJ6K+no9DTP87M=:Pickaxe_ID_372_StreetFashionEmeraldFemale1H",
    "CDCC968B6DEB5D05990F5D530A4B19D0:gAiLmJxr4FbEf/L10sgHjOLE8DEy7kYdtk7DJcgjPRM=",
    "FF5A507BCC4519B928075C3DF4603E8E:EVv5b8WFOYZlDUGRqb8YUS1WbIbbT8TjgoBWEQr65zs=:EID_IndigoApple",
    "AB10C0F1C99E5A6E4E477300FBD5D170:tLrb56vTjn3uiZIRhHU+RYygmirLzGglmEdI4DqfK4M=",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=",
    "2E1C06DB5781755F3F06D95B6612BB3E:aTN33nTPI+qQ+osYxcMa4FjlyajAzhIxRzEcoAr8iAI=:Pickaxe_ID_546_MainframeMale_XW9S6",
    "B0030ECDA329A8B589D249F794EA90B3:BfF0FYJQJ71DMUBmClT0DppsOy+1Syn8fGu6qNtTgXE=",
    "F51F080981F8DC32B09FC3C62A977363:NqX2i8P3ayVe/mUk8aAqzUg5tvMEDWt1URv6xc4fUkY=",
    "28CBBF705C9DB5A88BEC70DAA005E02E:FvtzBBvDkyj8PRLW76169bMFvg65VojYrSmkjUAi4Bc=:BID_352_CupidFemale",
    "B16BF216C9085E63B70056FF0459F87A:xKQqQkkw6VWwT0pk7eKzepG9HM9kzi2ZPwSbdLWtpwI=",
    "AC424209DFAB55305097B2050E16E2E9:efXu+MoloNbSOOHz8X4ipvD2MhSMWpRCaEOVNcdLPrY=",
    "44DB36B2D2B3854669780458D2FE48C4:gtl0smAMRKg8d9TdDH47lUOYCygKzbAPA6/HaXLWy94=:LSID_323_Majesty_0P2RG",
    "3CE25AC56856D0E10426276F61265547:NEtVDXR0qoOfW9lgdS4AuA8dkfd/1I9degcRI9UnvUo=",
    "54FD9ABD65879452DCB8CE11C1D7F1AF:nV0Vm4NCBl+MkGX8wiqfFrg0viDriL3I2xc4KS7n7fg=:Wrap_070_MaskedWarrior",
    "7A8E25F664219ED6CCF3AB1658D0E557:TV+yyWpI3iHJoaK3o1t6+/uhN/sFZ1OixoAx0n7MtjM=:BID_330_AstronautEvilUpgrade",
    "F60CFFFA32CF6A877B50DA7F0A88326E:OWIopbB4fxaobofPI9lF9hn6BPG9NVLp4Od61uQppfo=:Wrap_047_Bunny",
    "71BEC74046C6920A467E57B69FA3835A:q6m1xB4+mCmXL3g7eRGykDO6ZKrXS8M7m8SqbqIKzkI=:BID_202_WavyManFemale",
    "3AC281E7A5EAA2765CFE02AC98B04FC8:R/hWNn8BcRRovJE/L7h15VDrJ0H4VqBBVt6XVvq2Ebw=",
    "D2FAE1D098B2B4695EB59FAAD504798D:ZUDIqDvGVcpCVuA3h67vdkVbZwLuC0Z1zX33JLyi5xE=",
    "204D49F063979C3AF87EF896D074D1CF:SaYFk+GEE7mL4dsgs0v0VGR5ER4TwH8uTNX5XqSglu8=:Glider_ID_251_TapDanceFemale",
    "A69EA08281B5018543EC525AC7716B70:1W0iCKEIuEfDSOaJfl4gQEpenDKjLQGAovP3LWc/FTw=",
    "BE6386E7E95BB83F727A5282D4E1FF37:FsEC/J/Y3POX7wa0/+SonLUCp+u+MH7dktA25PEYLns=",
    "419567181C57991B12DA9A9AEADAE6DB:nWZ+G2GG0PvarQUg/U/kRpWaJkA2YmmCgixEy4No+7Q=:CID_706_Athena_Commando_M_HenchmanBad_34LVU",
    "37B3D2284CB3924E6592C2D1D11451E4:CMJclyQ1I9iY+VkDiajhGxxYQmZGHrTAlEl/wtlT+pk=",
    "D938886074C83017118B4484AECE11AB:wjHAHm00Vg6n2x5LU91ap0+SFX5ZXXBmax1LyX8Aips=:Wrap_348_Alchemy_FYA4I",
    "D14FDB2BB2FB7746797F25470913BFF1:CQDgIxcNnAoUboQnjafZAYvV7UqX+NefGTXFd3m+oFc=:Pickaxe_ID_708_NucleusMale_72W2J",
    "216D955070ADAF10973BD156897472C3:MjQh55OvnJCoVMQzMU4C/1NF3FWiXDXnJ6G/EcHfUzo=:BID_258_AshtonBoardwalk",
    "DC8B99FB6774F84C4C0AA8DF768B758F:Rt+er5PzLdkCFk6oyu/T7AjMhYb8JT78rqtXXk9bIDU=:EID_Aloha_C82XX",
    "768A95DE7B657B7B23D5A0DE283EB49F:JLLAz46a7wo2rADQvCkbp4IbKexr7J5bBr6d6toSn50=:Wrap_050_PajamaPartyRed",
    "8CB3CD29BF1611B7CA90D1C635859415:s7gVGQuQz2CDwqNda6dXQRqH9mpV6NUFu1zaoDihQYU=:EID_ChickenLeg_TDJ0O",
    "419567181C57991B12DA9A9AEADAE6DB:nWZ+G2GG0PvarQUg/U/kRpWaJkA2YmmCgixEy4No+7Q=:CID_707_Athena_Commando_M_HenchmanGood_9OBH6",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=:EID_Sunrise_RPZ6M",
    "8022BB6AFCA2733E261C32590EA86E9B:HzKZXV9sQfjsDuGuGRfpabHawomJhu82FeOaEQDg1lM=",
    "E7D27A42770632B7A50BED813D9B1696:bxADNk9dmPNeKEuSvJl44teif6sHvs36yBZ55E9fhwQ=:LSID_420_SCRN_Snowfall",
    "AC6F67B037F362174DD4DCEF7522D107:s4kP8pRC49WsLsc5Nlh7se3l3x57R3KrldkoTK2L8PU=:BID_301_HeistSummer",
    "D49757E2D55451A0D5B341906FE2ABE4:PWMwnjgi/wUDV+yxg02QsU33jA529fxVTRHyqnkv21c=:BID_259_Ashton_SaltLake",
    "591DF838AC4B3A6350E40E026B26D5C0:MBvGoHxJQBTxCm2V82s2yHqRWPsYdFyj8xKUhFsUkyE=:CID_746_Athena_Commando_F_FuzzyBear",
    "72CC2893A6B672F3854F36629B770774:0BgQgKZRRuPFEoqn7CxZVhLBOfpCE3qLKGQlZc+SA80=:SPID_325_UproarGraffiti_QFE4O",
    "8E1887D55A60F69B33B234242FF49653:YofZaW+CRl0jhVhkp9z2CQWhTPwyjQ6dbHtISkLDfVU=:Pickaxe_ID_801_AlfredoMale",
    "4E7938F1FAC98BDF378823116712AC7A:jbZVgprILTQomUdGeJF0PsAFAJxsSCs5cKcXweZMAg0=",
    "452BEE39B4C18C93D6B185B565ACA1CA:Be2Oll2p0qIXmiJMi4Y/wyePY+WefMmJyCzjgjrzkhc=:BID_233_DevilRock",
    "72CC2893A6B672F3854F36629B770774:0BgQgKZRRuPFEoqn7CxZVhLBOfpCE3qLKGQlZc+SA80=:Pickaxe_ID_699_UproarBraidsFemale_LY5GM",
    "2DCD2E2A9A816AA9035999F8E6F85F6E:6xM4ZYt0UAylyuIgFrmOgq4fYVH2ChEzQNcl8KGQF0o=:BID_532_HardcoreSportzMale",
    "310CAA852300A8ED2B74754EF027C823:CbrsdQ2vpkgVe0Oc5HlGFLVkV9arQn928vHSnPpSxbk=:EID_MakeItPlantain",
    "AE04BC41397F3D492390E60E59B39CAC:xC3e/4BfPQ5/xQqEKnB+EgmzrOcLiOCqiQCuZB6V9Ac=",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:Pickaxe_ID_749_GimmickMale_5C033",
    "A02E08C8CE48D4D8676358FF7BE55533:d9wA4snpl4I4B4zZFxWyu9cL9zSkXqy9+vTw9PUhHlw=",
    "498A4AB4BC3BFA9B055CDBE833C51670:67ndB88hm7gomLYiklekB5rGWrcr8RJ6K+no9DTP87M=:BID_494_StreetFashionEmerald",
    "F707FA321C9644351C5F87893C16580F:bOW0W1Al3NZZGbPupvIlLl7wWgBA2jPtH6SZO/fjdy0=",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_905_Athena_Commando_M_York",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:Wrap_396_TextileGold_GC2TL",
    "5D6562F1EAD89513C82C2F37A24E7F82:I2c+SQCdDvJpC6z1xniRT+k41KAp0pla+o/H68oXFLQ=:CID_652_Athena_Commando_F_HolidayPJ_D",
    "4BA767BD2DC06D215B435AC09A033437:QOfpKnEogmj0tTa5wf49SZH55Sy48QEGP02DbkSg218=:EID_Grapefruit",
    "F6CD3CF3046D856E3934D86042C683A9:s2pBk3DSUjPJehrTQH4iEDYiESVbSMwIW1xuOd2FZJw=",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_914_Athena_Commando_F_York_E",
    "34DD24ED0CE62244E7FFD27EF4C29EB5:jTgMUc1ciLKwXF/PqyFJl6s9Iw5SXYHKiSThOQhG5TE=:LSID_399_Foe_AN5QC",
    "97E91E4F436B598D654592793B595536:Pj0lxheibz4Db/C4ehhHGlOalLQAxFCS+2NYkHRbjyQ=",
    "0A43BFE2D06B46248FC6598C0371D5EC:+U/nWLs0mNQue0yVc9tTaRF+2qrvzdKZyxUR+MzTvMc=",
    "35C2B057E5168DCA74B6F1DDAC745E60:73haJlY3S0TVmH0ELxyw6p5FzFRrITWqOmobH9F2Mq8=:LSID_400_Keen_T56WF",
    "F9AF8CDE150D2D1E65B64710D70C23A7:3SpHToTu2E//Qe8Dhu4I3kG5fLqEemMiL+2NxRVKdOc=:EID_DuckTeacher_9IPLU",
    "99E94152C1F777A1D8519A532741EE40:3TCGPeLF3mnH0j8LE9oLwYiXHMve97rw7Vw1OQcnczQ=:Pickaxe_ID_762_LurkFemale",
    "552DB214510DE1E24F08920F80B0AEC5:GP2CYv9xYYDf6bOnpgm0fnOXa3iI0acXH02ZIaHAElg=:Pickaxe_ID_648_StereoFemale_0DTZ9",
    "E0FB7B394449CE6450EA90C93D710EB8:NrXwNX6lKuu/kyQuvE74+6Uo04FODoV4ZqxToj/jS6I=:BID_300_DriftSummer",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_912_Athena_Commando_F_York_C",
    "74245D2573276B4C9ECCF61B23367A72:I5LtJ72UAlZ9XIupxkzRJKiRnSEkEvEc5D8+Ss4u2Ik=",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_298_Athena_Commando_M_Slither_EJ6DB",
    "2301C91045828DBFCDD966BE1AFE22F7:zS44RFNKoS6+WDSfin7CebOMjLH763+OGG5wjTrCosc=:CID_274_Athena_Commando_M_Feathers",
    "30A1FD89B2D3C155DAF14852A39BA97F:C0IwuJFw9v06OF8XthOhzUd3nHOTCII1gmx/7eepmDo=:Pickaxe_ID_746_ZestFemale_4Y9TG",
    "3ECF85734CD277EE10524DA249C5D0D8:4NtGfZpXGCuoEqpaN7C2kInVtLVwQ9Zp3zj4vtwxtv8=:BID_211_SkullBrite",
    "E47EFA3166A5D7B35CEC27B19AC66AE5:JURSqAHhHK6YqLP5rKhCO+SQ2oql4NqJaoaeNGtsrM8=:CID_A_173_Athena_Commando_F_PartyTrooperBuffet_55Z8G",
    "925BD833E71FF05FB73136BF57189C5C:WsXZpM/1+PT+xzorL685J5XB1dpvv8IOpOeeA2Rl1zE=",
    "D24667CC40ED6564CE26A31E63E327BA:OnghWyLG/IQEx45PtmEcmqAHuViWUsTSDQ31EgRhyZM=",
    "2E5F91AEF58F310AE2044EA39C43BB81:pNy1GtfVzymqacOqXRY14EZEvI5ZSVD5AFxlhxXC5qk=:Pickaxe_ID_683_CritterManiacMale_S4I63",
    "54FD9ABD65879452DCB8CE11C1D7F1AF:nV0Vm4NCBl+MkGX8wiqfFrg0viDriL3I2xc4KS7n7fg=:Trails_ID_027_Sands",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_A_002_Athena_Commando_F_GlobalFB_B_0CH64",
    "46FC5EBAD39CE53EFB215A2E05A915FC:H3gtdkEzT3Dk8vkwTTZE9oUDoJEy6vmfQj1jDo453gY=:BID_256_ShatterFly",
    "258D945630DF6E1016889F47B16EED80:zQ/4osJ36W0V1DFXswf8JSStDMBTZPQ8oFcMrDqS7BM=",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_947_Athena_Commando_M_Football20Referee_IN7EY",
    "D83FAFF508200C47DF03BDFF2F801FEC:s9P7AOkoCuPm/506hyAKzuRaIh0xzV9YZON4oDs7GoY=:EID_Jupiter_7JZ9R",
    "0CD312F730BA9C3FD6CD67420EDDACF7:nXBDxcWYx2VtjMeRCDfSak9+f9aSOgrcxp8GKeUiId4=",
    "BE20AAF89FE897368E52AAA193DEEB53:jHRZho9v4IKzFzk51RD0nAVFCZ27vIwcstPkdQeSupc=",
    "ED61A5415E40BB0A188CDB1DA91F22D2:wGuFJQg1ldthApzow1drpoq6i40AzOsoODCI5I/6JSA=",
    "359567C8D8F146C8D08FEF2B24AFC9D0:yMWg8m0Eh+0UGV6CgIWrXsJMPT/Ww8/Qa3RlYPo/bGQ=:EID_BeHere_8070H",
    "91C415954BF27B6E43970FB8A75FE8BB:YhHyxIA+Ru33r3pThiWqKNYdvDbL05yXSxKarRuMSxw=:Glider_ID_103_Nautilus",
    "C015FB76A9E7912825A5F9CA69671961:4zfC1uF8ll4CkTBctitVmwjHsazAiz2LXPHIPj4ef98=",
    "819F658DBDBB5D333430800891F28361:u/+kuv6DsiUouUOusRRfC8Ti5rCKhsgIyxyOnLH3Mh0=:CID_719_Athena_Commando_F_Blonde",
    "3DB93E023E700ACD0C78072ED4787D37:aePdzcjsQvnpefA3P/cKfnZrVspZ5QVSsAc+Rui20pM=",
    "E50209164841E1829F672AB1B33D069F:1EMTmCTA4cO1QMoLu+RWAGd8Rw4FQdAONKvDwfQeNV8=:Glider_ID_118_Squishy",
    "360CD59F6F7B68A441DDED9DB5FD13D7:G6pVAf/ul1HPYh6s2M1l8G4hn62jdwkcbegeLoxL7Y0=:LSID_364_Ashes_0XBPK",
    "2DCD2E2A9A816AA9035999F8E6F85F6E:6xM4ZYt0UAylyuIgFrmOgq4fYVH2ChEzQNcl8KGQF0o=:BID_531_HardcoreSportzFemale",
    "06E3CB03E94C4D850CE185166706E868:jDuRIbxnZBnAH/hUrfRX3qnGyIogSWUHrK6nq7Et3pk=",
    "2E1C06DB5781755F3F06D95B6612BB3E:aTN33nTPI+qQ+osYxcMa4FjlyajAzhIxRzEcoAr8iAI=:Glider_ID_273_MainframeMale_P06W7",
    "89D641BBEFFD9A227200861A01807ECF:rXDTm9JS6HhLBHIDXPRRF/eERp1DkUhV46QPxevqMWA=:EID_Comrade_6O5AK",
    "3AC8A6B5089F55E17E00AAD8AC3C6406:TlUSkJe3y85fW83rHMy+XuqcZxQduXcB8yftpPoiDvo=",
    "06672238D711A4FD743978B86CB0E0C7:c8ILo8LfAtcO6tUoX1BdrnptTcPhKbiZ069jkvq4UjI=",
    "44DB36B2D2B3854669780458D2FE48C4:gtl0smAMRKg8d9TdDH47lUOYCygKzbAPA6/HaXLWy94=:Season17_Magesty_Glider_Schedule",
    "35C2B057E5168DCA74B6F1DDAC745E60:73haJlY3S0TVmH0ELxyw6p5FzFRrITWqOmobH9F2Mq8=:Pickaxe_ID_737_KeenMale_07J9U",
    "71C3BFE2AF0BC8DE7BC3735614CE6263:hNLsvUTUw0cw1WrfOEjm7oSGPfpEZer6R0G7F2El6Q0=",
    "01BCAD21B42507D45972A0E634D3BF68:LFzYKDNwUHYxLThhPKfnzmnADCwCZFjZybIL9TaGBkw=:EID_Deflated_6POAZ",
    "96FD474CBA52137DC5ABF658BE17C792:ZLWvbUR7Xow1GUNjC9Mxg7DHVoJAnBr4b9gSzmyFcxU=",
    "552DB214510DE1E24F08920F80B0AEC5:GP2CYv9xYYDf6bOnpgm0fnOXa3iI0acXH02ZIaHAElg=",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_082_Athena_Commando_M_Hardwood_C_YS5XC",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:BID_922_SlitherMetal_ZO68K",
    "EBFE6788D367D741AF0A4FD098CDFD39:FAeJTGyT49P+dQOmKx+lMYVAxu7qtIPlqSaLAR85zqI=:Pickaxe_ID_213_AssassinSuitSledgehammer",
    "922A62BF1FB397B890EADCC9ED9E6F90:OvZzqErOUkh5FciEJD8JI+lu4X5NmK5TtzvCK6F5RM4=",
    "99F8F15A893B9B4BAC2E12BFDCE251B9:1OMIfAluyzGr5kvv03niOQMXp/D+M1s/f/mHTv52Prk=",
    "C17D1F224DBE7ACE1D1D998F9EC974B4:lKF1wmYGidWP6J4irSLvW13QbAIwHPOeO8b7LtP88t8=:CID_303_Athena_Commando_F_SnowFairy",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_448_Athena_Commando_M_BannerC",
    "C97FBD76436AD77913E727A0AD147FEB:NjQSZ0Lg9LaEhDjA3TeS1XUhN04KM2wQvR0j/YPmQu4=:BID_181_SnowNinjaMale",
    "4755D9C0E2D1DE1C09B77DEA8B830471:9tUO5yVhvp+/sp7icZaEDw05nMAdS6bYAWYyfQNsxBc=:Pickaxe_ID_389_DonutPlate1H",
    "27D6556F776B2BDA97B480C1141DDDCA:uvUqb5LuwRFWQnA4oCRW3LNdorYcGtOmJ8PvBeCwBKg=:CID_466_Athena_Commando_M_WeirdObjectsCreature",
    "545B9777127F4BE242F802C627356B7E:RNI/KvLEXcGoGnk3/AKaYbyJmXMtQl9Zmvl8ErePB4g=:BID_874_RelishFemale_I7B41",
    "452BEE39B4C18C93D6B185B565ACA1CA:Be2Oll2p0qIXmiJMi4Y/wyePY+WefMmJyCzjgjrzkhc=:Pickaxe_ID_176_DevilRock",
    "204D49F063979C3AF87EF896D074D1CF:SaYFk+GEE7mL4dsgs0v0VGR5ER4TwH8uTNX5XqSglu8=:Pickaxe_ID_500_TapDanceFemale1H",
    "793D221E5331282DD7F3681100944880:B5R64E9EZQD1lHmmyUV+9a1XUEOcYfdopJ3avEIcVxE=:EID_TwistFire_I2VTA",
    "73FDB8F2BDCCF4518225CB3E28DD9C0A:MBo/DO8mLebMquZPCgeE/FgUdJOXASKVjIJ1H+IEPac=",
    "00BD73648F7CD05EDE0B2D4C33B499BD:0D3XSX1KGIR/UWBELcxKxJp06xbU96TetFY2Rz9R614=",
    "B9C9B09F29DF6BC9DA94C36184CECFFF:1/E0M5TV90UjL3PR+sqOzaRiMRpF8ByTmfVayVEL/Ig=",
    "1CFA91F4317CA2724E2AD9A098B2888B:op+720ix4L4JmxKqwXbOt+T5Xwqhcva7c6lETmEVCbY=:EID_Shindig_8W1AW",
    "4D896B93DC5B2D18AA2949EA7B67B4EA:0V70x6p0zRRV9bV6P+sq62lM0CdW4rvUgip6/65GWzc=",
    "2648ACDF6B7E55495928F2319101BB8A:tKha+iiFKUamRIWCxq0gOtbN/G1B5J5eOIElAx9T3rc=",
    "4C838738CDC4946786DD7BE341AB05DD:eyjCm9OcFQSvVRVBZizNVyF+8kb9OlNFrvDy8d1QDfo=:BID_253_HoppityHeist",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:Pickaxe_ID_787_LyricalFemale",
    "A9823E3BC8FF6814492A2DE0334F124B:wyyFD2WOtsgHbGC4RNkEvLFNgbZWhRmcu8lQHg0UBFM=:EID_Concentrate_0W5GY",
    "8680408E4982495D8EC65D930CE902F3:ZIoca9gNSMll2u3zmmEsMFSAp2pTmsvWIPWwz2b0FsE=:BID_188_FortniteDJFemale",
    "3D8D56FDB72DACCA7E656FBC0F125916:gMX76nmLV2caz28Ro/i3FatCU4tdi1jHgJSPbdnLTUc=",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_937_Athena_Commando_M_Football20_UIC2Q",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:Pickaxe_ID_748_GimmickFemale_2W2M2",
    "2D24182706636A7BD3E96AD37605BAD6:jEZJE+EAU7VDo6p6Y84e4+p3AHxYBWin144H4MhzaSQ=:BID_553_Seaweed_NIS9V",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:Glider_ID_348_GimmickFemale_D76Z0",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:Glider_ID_364_LyricalFemale",
    "91DE2263000EF60E067F04C5505104C0:J72L3sJQnakH4GQrYgBz7QIAmI4aC1sde+iB7zErKG4=",
    "DD07D332EE51C9C9585F5249FD62A45A:8Fv7jA8ISZ3iOlNCeaeeGh9rmRV6QvL7sbsx5wYTvnc=:CID_A_223_Athena_Commando_M_Glitz_MJ5WQ",
    "19CAB803EB00118FB3E6B3E5ABA7B234:tRM77TfQWWJ38hNsFLjt7jMNoSOozxqi9PF9/9H3rmU=:BID_373_HauntLensFlare",
    "5A03216B7495CB52261D6E0D74DC62CB:tYFoxNFq/lu5imPTcSk5vAX7ZfPNBwi8INXf2hU+YyU=:CID_A_159_Athena_Commando_M_Cashier_7K3F0",
    "B8C17AF9BC0DF3113AC6C498DF3325C2:iElxozD4UvK0+tPt0pPLg0gBoSkwLwByJiE4ucKHU7U=:Wrap_085_Beach",
    "7A59383C41DD998408A74BC37C7D6887:nSrruhpHV3ZEPPECeqWkMh/6mBFzQD8yEFKZS6oJeu8=:CID_A_080_Athena_Commando_M_Hardwood_I15AL",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_956_Athena_Commando_F_Football20Referee_E_DQTP6",
    "D83FAFF508200C47DF03BDFF2F801FEC:s9P7AOkoCuPm/506hyAKzuRaIh0xzV9YZON4oDs7GoY=:Glider_ID_258_JupiterMale_LB0TE",
    "2DCD2E2A9A816AA9035999F8E6F85F6E:6xM4ZYt0UAylyuIgFrmOgq4fYVH2ChEzQNcl8KGQF0o=:Glider_ID_216_HardcoreSportz",
    "1609BAEA4AD6B664847EB5AACEAAD2AF:m2Yg+p6NDPR/POAPoG7bUCPabLTxGc/h8nrOEIwDx7k=:CID_228_Athena_Commando_M_Vampire",
    "134343D31031634B122471F73F611CBC:zqtMGKxH4+Ydcx+1mHOb5DIMYxctpm2nKqXp8c5hH/0=:BID_279_CyberRunner",
    "2E5F91AEF58F310AE2044EA39C43BB81:pNy1GtfVzymqacOqXRY14EZEvI5ZSVD5AFxlhxXC5qk=",
    "D517F2A448CCB9B47E5004894BC62ACF:qOdQUR91sysqDRELOgz/YVZ7Piae8hqcrnYW90fXtvU=:Glider_ID_318_Wombat_1MQMN",
    "F8D604C6FA9156F47356B54E1E442A97:EcmOKEqNv/9U+rw3oLZb7e+z4gaKWlfRIpdQwODvOKw=",
    "72CC2893A6B672F3854F36629B770774:0BgQgKZRRuPFEoqn7CxZVhLBOfpCE3qLKGQlZc+SA80=:BID_890_UproarBraids_EF68P",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_943_Athena_Commando_F_Football20_B_GR3WN",
    "F32262244DE021E18BF22F9BF7594474:08HErdKvBV58StDIjB9wvtY67peu7ZK3BsMpBMKvSrM=:CID_280_Athena_Commando_M_Snowman",
    "71EC943F69634C4E436D461E06D88193:aW38AAbm6/PX66vrSXaMTOOb0nydoEEhRphBbDZObmI=",
    "30B98E694C38C868A4EDB892F3FF1940:3biPX66md7tSkYYCBkYrshj9OJIo1B4CWV33LnL1kds=:BID_195_FunkOpsFemale",
    "F3A99CD0D4F58EECEEB0D112506AD846:ZZtCRPcKk6itVryDavp7uZFIXiZF5CW0O9b+8Zt2Oag=:BID_821_QuarrelMale_IKIS8",
    "71BEC74046C6920A467E57B69FA3835A:q6m1xB4+mCmXL3g7eRGykDO6ZKrXS8M7m8SqbqIKzkI=:EID_WackyWavy",
    "E47EFA3166A5D7B35CEC27B19AC66AE5:JURSqAHhHK6YqLP5rKhCO+SQ2oql4NqJaoaeNGtsrM8=:BID_818_Buffet_XRF7H",
    "09BC93B3441ECBAC30FA23BBEF59CF89:3CHInj+JfLspiVCNDY/GTZ4Pn52nWFeA4qYI0SJv2dM=:BID_183_NutcrackerFemale",
    "27D6556F776B2BDA97B480C1141DDDCA:uvUqb5LuwRFWQnA4oCRW3LNdorYcGtOmJ8PvBeCwBKg=:Wrap_095_WeirdObjects",
    "E3D0A604B93651DDC6779B14F21D0FDA:8gPR3gZwEJxfkZBkXk0QAlpnJ7q5mXzVc0DN3lzpJ5k=:BID_328_WildWest",
    "C76299772B1BE272260BF3396F83FC1E:uiBDMtwYhdxktbqTrhYkzEZErlBp5gBtkLM+QFDouT4=:Emoji_S18_ClashV_I1DF9",
    "7BF9CA82EA29E080F7106C60B645B76F:D1NrMwnfRG8tf9LF7B4r7rQ53M2nCtPv25qjw22T9MQ=:EID_Skeemote_K5J4J",
    "5738A14C7E45E1B405CEF920829CB255:xZHlPTz/dxNahrp9IqTZ+tjOZSYMxQb9KZFXlg9N638=:BID_423_HolidayTime",
    "A08F80FECB766B071C66017C5902DBD1:Q4sRGzjjbRTMZ3HwAmiC6a6+017KgXUsLapzs71OWEs=",
    "713D64294CD1C40F60DEEB805E3A2D87:CJOOHtEX7q4CELcZ96oZjrmSZd7pyJ2fMaFX912GDl8=:Glider_ID_110_TeriyakiFish",
    "9261CD0F921EAA3CD6AA8C0716FB042B:W+yzeWWxWnA530lwV8nLi2BE+TD5MCXS11th7UphmPQ=:Pickaxe_ID_543_TyphoonRobotMale_S4B4M",
    "E48EFA857D8E6914B2505B05AADFB193:4AUdytefPzWNT8c11iGtU4xcGNWEgzpMJbxTjUq3NS0=:EID_Backspin_R3NAI",
    "4F463077C4B0260225A47547ABFDDEE3:jvXG7IisBPOlXz80kl6hZdn+jb6TV0Bvq1WafaHji44=",
    "E59B013651F078E718F08ECF9E1559EE:rTGy9at5kTfQtu8EwVrUihfzuN8vkFPl3XNyGvqbZX4=:BID_250_TheBomb",
    "5A1170F589134C4D68AAA2B5AA6EDA69:bfro7s6Qtde/H7C4zc6MJdpua1mhem8HywLluxBLDrg=:BID_642_Embers",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:BID_896_GrasshopperMale_BRT10",
    "16FC688AE41A3E3C518F4DD9F9612EE7:Jd7nRLx/FoonA2dUjtbvJVk3nJoNq9LTedk3u4EdFS8=:BID_248_Pilots",
    "21D9E3FA446D32EE85025841557C1E4C:KBL9ZqzocmLvcq5k3mwTCeoeeVfJdw9wjuQacUrg50w=:CID_A_243_Athena_Commando_F_Grasshopper_E_L6I24",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_946_Athena_Commando_F_Football20_E_EFKP3",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_998_Athena_Commando_M_GlobalFB_D_UTIB8",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_348_Athena_Commando_M_TreyCozy_E_VH8P6",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=:BID_853_TextilePupMale_LFOE4",
    "0690C12E471B0A42CD02549ADA662D64:Ntgy1QBz7O7CswgzsqOYwoMahjG3hGmk6/Qh4/rs+dM=:BID_153_HornedMaskFemale",
    "BE2C3EF59AB81D812AF5B8153325998F:W7NoICLZt9L2d7XZ5dT9gtI80MyOizk7uA9LtwA/Edw=:Glider_ID_323_GiggleMale_XADT7",
    "D83FAFF508200C47DF03BDFF2F801FEC:s9P7AOkoCuPm/506hyAKzuRaIh0xzV9YZON4oDs7GoY=:Pickaxe_ID_510_JupiterMale_G035V",
    "1234642F4676A00CE54CA7B32D78AF0C:Nd8vhYp296C+C0TqSIGxu0nBYOFGQ5xBNK5MFjHS8IA=:BID_200_SnowNinjaFemale",
    "987329E3B70FEAD522EBF7435E5CA6DD:j4zyQQh25LYcjUO0HYDsBzmqLSXR5r98UKdC0xeTyHI=:EID_Boomer_N2RQT",
    "30A11EE8EB62BEFD4E9B09611DB13857:YVeVPXcP7UoJTp71ZXpGNdPVzmjnRyymcUpsNWYXfRs=:BID_507_DonutPlate",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:EID_Football20Flag_C3QEE",
    "3A122019FCD271A539EB71E952B32D60:CCYj89kHr2atYI9ZfLcisGTTnGy8GtGBKZ/arLp/tlY=:CID_A_344_Athena_Commando_M_TreyCozy_6ZK7H",
    "22B8405FC3BE153C8148422C3F2D3A8A:d/ATMDztVZxwHLUCwOcJWP1/7oPKKGqbBWUBRNZ6dnM=:Wrap_391_Dragonfruit_YVN1M",
    "CB3D84444FF0E551D18939AA7226B17F:U4GIAd4fGYWy9tySw3iVb92+6ZX3rQ3FsiBCXMT4TSo=:BID_194_Krampus",
    "35C2B057E5168DCA74B6F1DDAC745E60:73haJlY3S0TVmH0ELxyw6p5FzFRrITWqOmobH9F2Mq8=:Pickaxe_ID_736_KeenFemale_3LR4C",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=:Wrap_465_Lyrical",
    "E47EFA3166A5D7B35CEC27B19AC66AE5:JURSqAHhHK6YqLP5rKhCO+SQ2oql4NqJaoaeNGtsrM8=",
    "C23FA9BDE9342B508B8AABBEEA6699A2:3mRtSSu9PTBlC3NpGAQcFent660Ptni4HbGX+Zj1KIA=:BID_867_CritterFrenzy_3VYKQ",
    "578DA5D582A996DA819F409BE37C39DB:8KdrpLeI7JWcPozcUme7kvSVhgqxwmR0/ah4h+nCWLs=",
    "4009CB877085F3B3B0D76A686465A140:gMLJXUbFcIrqqUlAuoMI1b27KdWHBVJJeJWdYV1Iiro=:Pickaxe_ID_551_KeplerFemale_AOYI5",
    "308F587F46CB50450DCA9B9CFD50E120:2nvyeGrxnqL5SJjMPag1d9YiiXfdGYVkL/WJqWYnC2A=:BID_157_MothMale",
    "60CE6E28E6993C1DC1C58E839E7A7284:ZlOTwn6YbAK9HetjsiQo0AS1jwJQnLJY7NkR5i7o2/g=",
    "1C8FA86241B2E4D084F7548529629CF6:pmXOfd+NEXcLhZX5YqDLjHu8/yzZoo4dWPcCM8ccXoI=:CID_333_Athena_Commando_M_Squishy",
    "D2FAE1D098B2B4695EB59FAAD504798D:ZUDIqDvGVcpCVuA3h67vdkVbZwLuC0Z1zX33JLyi5xE=:BID_925_LateralFemale_7RK0Z",
    "4027857851DDDDD81540A7A6B79134AA:VuQSvPVjqCjbln+FWNnnQ2RjoNjs2P8dD57qSDhhKx0=:EID_WrongWay_M47AL",
    "88FA70760D757D80F661FA53B4762EC2:7OtV76cpyOq9dNeM5PVD8TOdRcPx1K3weEPXzlCugu0=:BID_878_BistroSpooky_VPF4T",
    "7FA066BD68EDBE54C44CEAF5FDE591AA:MqrhrL7xbe11CZPwz1pJTx8M8yUHGe/VHL29VKlKVKg=:EID_LittleEgg_69OX0",
    "57EC154062C75464BD8A087D89732317:5AEwoCp79njYci8QYF+sLMkGpjDnFCYLSCtz4LD9D78=:BannerToken_018_GalileoD_5XXFQ",
    "2F2804FC81CA638FC3DFEE5FB922987B:vz4MvtMQubNdmH1BO2E2FnNT3/vSvjbIn7HWNcWIYl8=:BID_272_AssassinSuitFemale",
    "522BADEC3C1B8FB686B355A760304BF9:4yejFeII+k2XIzKVEF1UPXPHjMamSlHIEljDToNlzvw=",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=:BID_875_SunriseCastle_91J3L",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:BID_921_Slither_85LFG",
    "D1EBFA5EEFFAFC07E39EE2D9986CF8FB:jdM2xx6liOm1miOSVC7txNj6HvWF7/zCq4zxMYFYxug=",
    "5D6562F1EAD89513C82C2F37A24E7F82:I2c+SQCdDvJpC6z1xniRT+k41KAp0pla+o/H68oXFLQ=:CID_651_Athena_Commando_F_HolidayPJ_C",
    "E098A699B1A5E20B03B5CBBCDB85D4E3:oKYx1AqjUax4YhKirSQDeyBSQNkSmEKDS7q+U/4KszU=",
    "BA4D882E7B09657A5E05773F702103CF:PjieN4lF3tRBNjQmWWUAyvZUaV0OrPGPYwrqNT8ZSus=:Wrap_045_Angel",
    "8E1887D55A60F69B33B234242FF49653:YofZaW+CRl0jhVhkp9z2CQWhTPwyjQ6dbHtISkLDfVU=:Wrap_476_Alfredo",
    "EBFE6788D367D741AF0A4FD098CDFD39:FAeJTGyT49P+dQOmKx+lMYVAxu7qtIPlqSaLAR85zqI=:Wrap_066_AssassinSuit02",
    "E0FB7B394449CE6450EA90C93D710EB8:NrXwNX6lKuu/kyQuvE74+6Uo04FODoV4ZqxToj/jS6I=:Wrap_088_DriftSummer",
    "01FC97F8787B82E027EC64661E0D36AB:Mh1l2LJ3YrgaZtg7sRTd8XeBkVcyA3i089gZKkTr1gM=:BID_985_CactusDancerMale",
    "7FA4F2374FFE075000BC209360056A5A:nywIiZlIL8AIMkwCZfrYoAkpHM3zCwddhfszh++6ejI=:CID_223_Athena_Commando_M_Dieselpunk",
    "5A1170F589134C4D68AAA2B5AA6EDA69:bfro7s6Qtde/H7C4zc6MJdpua1mhem8HywLluxBLDrg=:Pickaxe_ID_492_EmbersMale",
    "C23FA9BDE9342B508B8AABBEEA6699A2:3mRtSSu9PTBlC3NpGAQcFent660Ptni4HbGX+Zj1KIA=:Pickaxe_ID_676_CritterFrenzyMale_B21OE",
    "F3A99CD0D4F58EECEEB0D112506AD846:ZZtCRPcKk6itVryDavp7uZFIXiZF5CW0O9b+8Zt2Oag=:Pickaxe_ID_646_QuarrelMale_PTOBI",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_305_Athena_Commando_F_Slither_C_UE2Q9",
    "BAEF248980269F569C6E1FFF2B885DF6:2b6DQGIcab1r7zsw5j3MR84iDmt0g1XBquxJVR/8GxM=:BID_402_TourBus",
    "BFE1F518C16A9F061B140D829ADDB0ED:bHkPYjXd71vacoJ4IisL//zEyVLFh+Di8MUqV9KkpFU=:BID_806_Foray_WG30D",
    "BF953D81273D8772F12F57646A49430E:JP2vQQulX3OGMjglMYW7PT3KMCMbia3rtHnuEsuEVxA=",
    "566C4D92AF66F45DF5E2D7EB43CC27AE:EuAYwU5tQBXzGoSj5BMc7S5yFfe9wZ2qrzx/hIHpnqw=:EID_LunchBox",
    "9B730D57F59135CF774023F0DC1A99E7:l2Jy2Q3X1MPar8qMDGSHWWhdsVsYQ7hsqEYFMA6D8fI=",
    "44DB36B2D2B3854669780458D2FE48C4:gtl0smAMRKg8d9TdDH47lUOYCygKzbAPA6/HaXLWy94=:Season17_Magesty_Pickaxe_Schedule",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_910_Athena_Commando_F_York",
    "A13ABC32168BF8FE80F667ACB4BD5AAF:WsXMYjk1W2VJ8o9Dj7FXsaKvHNeHydr2kJEiwPRIMwU=:EID_Triumphant",
    "9261CD0F921EAA3CD6AA8C0716FB042B:W+yzeWWxWnA530lwV8nLi2BE+TD5MCXS11th7UphmPQ=:EID_Typhoon_VO9OF",
    "EB16EA013B751792698E05435797C1ED:y9JgD812Io4mbaJ5i533Ts5SSfyXaGM4JyoimjP+i4M=:BID_245_BaseballKitbashFemale",
    "22AB4BDC10065AA49B38DE88522DF836:1L8L+oKtSOtIxbm1x0HbDtzquIH6CH8vu1PF4i8jU+w=:CID_449_Athena_Commando_M_BannerD",
    "AE9F7B3419C7FBD2414D72E2E1C8A7BA:kpIotniLp60tWfbBitDUrjw6gmJ2Swl+YT3QAkecpRA=:CID_547_Athena_Commando_F_Meteorwoman",
    "4BA767BD2DC06D215B435AC09A033437:QOfpKnEogmj0tTa5wf49SZH55Sy48QEGP02DbkSg218=:BID_A_009_Grapefruit",
    "929B82B3454DF80CC45B11A55400B6E7:jl/KsmshfBxKKnPDHyHNTHOzTE3buCIrBpSUpXJQdL4=:Glider_ID_107_IceMaiden",
    "5A1170F589134C4D68AAA2B5AA6EDA69:bfro7s6Qtde/H7C4zc6MJdpua1mhem8HywLluxBLDrg=:Glider_ID_250_EmbersMale",
    "98CAB76B2CB8406085C8CDF566FFF5DD:cucOYeadgsZAhkdKC7Klc4/BhUe0SnQtF2cwEScRBxw=",
    "F044853E82632E827ED91FB4AFBD28DF:LH1pXQ13KEoYfxxylALn8jaS0t/7IrVRVmO8UXieaVU=",
    "BB09F8C7991800CA61A7144E3A6219FA:o+Hvu5rCygQz66xIyk0SANceWaptKHLEls3vZaMW9oc=",
    "88FA70760D757D80F661FA53B4762EC2:7OtV76cpyOq9dNeM5PVD8TOdRcPx1K3weEPXzlCugu0=:Pickaxe_ID_682_BistroAstronautFemale_A3MD2",
    "7E5BFF3AFC483F87B5891536C0AF3DFD:dEBFRFQPYg4NndewaW9/rEDpW0N8VFh7srTZDn0aejE=",
    "312398E80AB6209B22CAA2EBAB2DB35B:QZ5uhBnQSeK4b+u9E6PTfw7j2scPMTPX4fFTOJWIwEM=:EID_Shorts",
    "63722D44ECCA0F4178B85F5A6BC4C31B:j42UL0bmfBkli6Aj92wWABwFby5rAplP/Ac6nh9kRvA=",
    "79F7D9C856E8CF354109D3298F076C06:Ak3TOM0i0Mq/KYxd7SDlSuS7o55USaf+urL6WqnmalY=",
    "4E7938F1FAC98BDF378823116712AC7A:jbZVgprILTQomUdGeJF0PsAFAJxsSCs5cKcXweZMAg0=:BID_586_Tar_DIJGH",
    "308F587F46CB50450DCA9B9CFD50E120:2nvyeGrxnqL5SJjMPag1d9YiiXfdGYVkL/WJqWYnC2A=:Glider_ID_099_Moth",
    "6D85E82539341B90944E84FFAAD872FB:mAiBk7KbE2Dnr+yVFyJK1yAwv2eWb+yANFH0z2krQkw=:Wrap_087_BriteBomberSummer",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_939_Athena_Commando_M_Football20_C_9OP0F",
    "89CD763ACF4C3672A0F74AC0F45C291F:vtcPbnTh2aDOt7LfYpJL+7aF1TaB8LDaLsMoQ47NZec=",
    "E4D8D083C49828F6BF310ECA74A84F98:NxjtZXHe49xC1zUVs+XKjHbeic3prkFOWmwkaQ1vOFw=",
    "D2FAE1D098B2B4695EB59FAAD504798D:ZUDIqDvGVcpCVuA3h67vdkVbZwLuC0Z1zX33JLyi5xE=:BID_924_LateralMale_Y2INS",
    "010E6ACF85E4A58BF6F551EFE7B85F61:DwCIH5Dw/1wdiS6gFGmWe4HUgD9kMOEzjbzM/1QshM4=:BID_234_SpeedyMidnight",
    "54FD9ABD65879452DCB8CE11C1D7F1AF:nV0Vm4NCBl+MkGX8wiqfFrg0viDriL3I2xc4KS7n7fg=:CID_422_Athena_Commando_F_MaskedWarrior",
    "929B82B3454DF80CC45B11A55400B6E7:jl/KsmshfBxKKnPDHyHNTHOzTE3buCIrBpSUpXJQdL4=:CID_298_Athena_Commando_F_IceMaiden",
    "F07BE27DCEFDF52818EE7BA2CD9CA504:lc47A/VahaBWJLQY4V1YyjzJPI5xVErInDaqdwPjv2g=:Pickaxe_ID_200_MoonlightAssassin",
    "34DD24ED0CE62244E7FFD27EF4C29EB5:jTgMUc1ciLKwXF/PqyFJl6s9Iw5SXYHKiSThOQhG5TE=:BID_938_FoeMale_F4JVS",
    "8DCAE39C7D9690E19F52655F02C613B2:ZZHbiVsbXquLlrtNVHtryLS3Vd1Ego8/8tlDpeUCgfc=:EID_ScoreCardBurger",
    "5098C0AED639B6C90A785C727F0DED4B:/YNq7WVNgAmtcY8eS20XBvoz00E1Z/1/Q0BZ8EluHf8=",
    "E8585F83E40CD4CF0272EA6012055A97:4LrXtLEBhL5JquAu4/kq1Dghb4/355YROt3ciXg+ysE=",
    "1B1978CC0EC6D4D937800A9E1CA87CA0:OjIDp8UXlfFZCaVJ6GLnMM+98VabjD7EB3J7ahiRNk0=:EID_Gimmick_Female_6CMF4",
    "FCD2F65146D53215F92F558CBA418191:3cp//Ss4zbgQ6tnnNLBcaTy9fsz3IM6ddZmiQSkX43c=:CID_336_Athena_Commando_M_DragonMask",
    "06E3CB03E94C4D850CE185166706E868:jDuRIbxnZBnAH/hUrfRX3qnGyIogSWUHrK6nq7Et3pk=:BID_771_Lasso_ZN4VA",
    "19CAB803EB00118FB3E6B3E5ABA7B234:tRM77TfQWWJ38hNsFLjt7jMNoSOozxqi9PF9/9H3rmU=:Wrap_154_Haunt",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=",
    "C5C1E0742C0BFE4264242F3774C13B41:BO5aZnDZhvHsUFLsJD2vtYCQ6iYpX7Lhl565nDsBhaE=",
    "B3BE1C036099F140800BB7D5FF1D9C49:bLt9+35t2O26OTgiEMuUCvH1kn+lGjTjhaEEoiz4CtE=:Pickaxe_ID_535_ConvoyTarantulaMale_GQ82N",
    "40E9F547033360DFC0DD09743229B87C:x0/WK54ohwsadmVGHIisJNyHC8MqlU8bg2H+BsaEBtc=",
    "56812D9CB607F72A9BDBADEE44ECCD21:pj9dMhJSaj6V2HsA0VWABE7Cs4+eEBz1Kex340gafK8=:Pickaxe_ID_199_ShinyHammer",
    "42FEDE262B530BFDC25D9E6B8684D1B7:bXloLJVoSi2uTe72cpdsB8pAmUPKzmxwPC2GPhHFVhk=:EID_Layers_BBZ49",
    "98BCB8B7136162178BF364D6105BB9B7:c1dhB+vWHWRw3YvWpsHRj9Ayj8JjdqYOLnyr0YImxVo=:CID_999_Athena_Commando_M_GlobalFB_E_OISU6",
    "AEC9FD29ACF48B274A1A573C9ECF4B06:7OT+zOUDq1RjYJKp8gQhbUnYz/qJ19It2X4HduP5y/g=:Pickaxe_ID_249_Squishy1H",
    "110D116208C62834812C2EDF2F305E49:MwuF5zX7GpQCGL2w+CwkPmGzH3q05YUoLo5udhVMNPg=:CID_718_Athena_Commando_F_LuckyHero",
    "EF7C5225BD60644B313ABEE69182A302:ITNJPJyUEyMw8YrBk89HfKwHTFV6jGJJHt4D8UmpaxI=",
    "8C623F6A49CFF9ADC7895A466CA1C896:kLmYdLi+jOBs2k+B/UxrCcPSdvuNYTha0xl9+SvUzJU=",
    "56812D9CB607F72A9BDBADEE44ECCD21:pj9dMhJSaj6V2HsA0VWABE7Cs4+eEBz1Kex340gafK8=:BID_254_ShinyMale",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:Glider_ID_248_York",
    "D938886074C83017118B4484AECE11AB:wjHAHm00Vg6n2x5LU91ap0+SFX5ZXXBmax1LyX8Aips=:EID_Alchemy_BZWS8",
    "3AC8A6B5089F55E17E00AAD8AC3C6406:TlUSkJe3y85fW83rHMy+XuqcZxQduXcB8yftpPoiDvo=:BID_527_Loofah",
    "4755D9C0E2D1DE1C09B77DEA8B830471:9tUO5yVhvp+/sp7icZaEDw05nMAdS6bYAWYyfQNsxBc=:Glider_ID_209_DonutPlate",
    "DC487286E8C1CD5FE18AC3FE76034EF2:3h9IwK2qQP8PHVuO1aZI1C34JrJxKBnXJOFcSDSj99M=:Wrap_102_WorldCup2019",
    "C5C1E0742C0BFE4264242F3774C13B41:BO5aZnDZhvHsUFLsJD2vtYCQ6iYpX7Lhl565nDsBhaE=:EID_Martian_SK4J6",
    "E0AEF4894E1283946745F7902F7E105A:7MXKJEs903nNbT1oFzykxoHbQNDnOBm6yfadj+mtBDA=:Pickaxe_ID_752_RoverMale_I98VZ",
    "FE0FA56F4B280D2F0CB2AB899C645F3E:hYi0DrAf6wtw7Zi+PlUi7/vIlIB3psBzEb5piGLEW6s=:CID_220_Athena_Commando_F_Clown",
    "8DCAE39C7D9690E19F52655F02C613B2:ZZHbiVsbXquLlrtNVHtryLS3Vd1Ego8/8tlDpeUCgfc=:BID_337_MascotMilitiaTomato",
    "5738A14C7E45E1B405CEF920829CB255:xZHlPTz/dxNahrp9IqTZ+tjOZSYMxQb9KZFXlg9N638=:Wrap_180_HolidayTime",
    "7B1151E3094646DFFD37B6492B117FDB:4WxNHdTgHDEpGjzIV2XIjGO41kyiwggFQpdq8y+o1jY=:BID_733_TheGoldenSkeletonFemale_SG4HF",
    "B1EB196DD39D0736E7E08F99B07D8B9A:1fDhBY8uhi++l6QQPL2YtxZgUv04OZoMGBrH+yN8yKM=:EID_SandwichBop",
    "2E5F91AEF58F310AE2044EA39C43BB81:pNy1GtfVzymqacOqXRY14EZEvI5ZSVD5AFxlhxXC5qk=:Wrap_409_CritterManiac_1B4II",
    "01079D19DDDEC8BD51AF536A7106906F:QQQwnB63pdEdKEqLYP9QzAaJXakZ3w1Iuai7YU3A+Xs=:CID_A_304_Athena_Commando_F_Slither_B_MO4VZ",
    "F78569F2AD7950F870965BC647904647:e3+Nhzk8SBfmZWoQThFsZmnyJs2AoJ+LQDgMz45YAUE=:CID_952_Athena_Commando_F_Football20Referee_ZX4IC",
    "360CD59F6F7B68A441DDED9DB5FD13D7:G6pVAf/ul1HPYh6s2M1l8G4hn62jdwkcbegeLoxL7Y0=:EID_Ashes_MYQ8O",
    "2F1A5AFD22512A8B16494629CCA065B2:Un44BCuGtirrKab0E9TeOyDRnWC/Jh1h48+FOn4UrtA=",
    "195439D6DD0FE44ADAE6BF7A44436519:kRCw7VFSPCYqhu7lJlA4kO4YmsqZUzxM6ARm7Ti8ntQ=",
    "8675F0B46A008B0B6C0ABDD41A619443:9JYZhRB5Kld9h7zVQTbfSyNJvhz9UaJ17HIAPZH8TwQ=",
    "22B8405FC3BE153C8148422C3F2D3A8A:d/ATMDztVZxwHLUCwOcJWP1/7oPKKGqbBWUBRNZ6dnM=",
    "F3A99CD0D4F58EECEEB0D112506AD846:ZZtCRPcKk6itVryDavp7uZFIXiZF5CW0O9b+8Zt2Oag=:Pickaxe_ID_645_QuarrelFemale_W3B7A",
    "95C6C2B37E1D15D60BB5C20D9D47BA31:exdH0xe2v+2t1wyoXpZGLX+iGDIdRxcQ6BG9iqi07Lo=",
    "5AEDD4DB5DA39071FCFC2404EEB3D02D:qaoe5DQrf1+HPEQRW5zls4KSe7DHbrxXO8OZMsFeo8Y=",
    "828B24CF7786DF74D8511CA89DEED8CF:nCahv7mQhidmYXSmKif6z7d6bQ60mdPQ7SrdZ7a3GaE=:CID_907_Athena_Commando_M_York_C",
    "30A1FD89B2D3C155DAF14852A39BA97F:C0IwuJFw9v06OF8XthOhzUd3nHOTCII1gmx/7eepmDo=:BID_947_ZestFemale_1KIDJ",
    "162FACA3B0E34C1BAF897ECD28D86C84:rKWv3Qcmp+oMK1Zbw7bhPrNSiFNoNZyIlXUW73ZrUnk=",
    "E0AEF4894E1283946745F7902F7E105A:7MXKJEs903nNbT1oFzykxoHbQNDnOBm6yfadj+mtBDA=:Pickaxe_ID_751_RoverFemale_44TG1",
    "8033BA4F3E1FB68ABADE271C9BE4EE42:XGwA8RWdavpeScQpqM/aFod3SGTB3PibdGE7iGKR4jg=",
    "D776CA2A40FD9EC1F8522E9E13E99031:uRYulzQ2zdGG9UisQw2wM9OOM/9JsSWFwFt5d/3okng=:Glider_ID_121_BriteBomberDeluxe",
    "D7727B4696A62373E9EBD9803F705B3C:XEbXIzCpOuA88jMBtt+XuMt+NaOIWlvfpW9h7i/dFlM=:Wrap_036_EvilSuit",
    "01FC97F8787B82E027EC64661E0D36AB:Mh1l2LJ3YrgaZtg7sRTd8XeBkVcyA3i089gZKkTr1gM=:Pickaxe_ID_782_CactusDancerFemale"
  ];

  echo json_encode($r, JSON_PRETTY_PRINT);
  
}

function discoverfrontend() {
  $r=array (
    'Panels' => 
    array (
      0 => 
      array (
        'PanelName' => 'Project Nocturno',
        'Pages' => 
        array (
          0 => 
          array (
            'results' => 
            array (
              0 => 
              array (
                'linkData' => 
                array (
                  'namespace' => 'fn',
                  'mnemonic' => 'playlist_defaultsolo',
                  'linkType' => 'BR:Playlist',
                  'active' => true,
                  'disabled' => false,
                  'version' => 95,
                  'moderationStatus' => 'Unmoderated',
                  'accountId' => 'epic',
                  'creatorName' => 'Epic',
                  'descriptionTags' => 
                  array (
                  ),
                  'metadata' => 
                  array (
                    'image_url' => 'https://cdn2.unrealengine.com/solo-1920x1080-1920x1080-bc0a5455ce20.jpg',
                    'matchmaking' => 
                    array (
                      'override_playlist' => 'playlist_defaultsolo',
                    ),
                  ),
                ),
                'lastVisited' => NULL,
                'linkCode' => 'playlist_defaultsolo',
                'isFavorite' => false,
              ),
              1 => 
              array (
                'linkData' => 
                array (
                  'namespace' => 'fn',
                  'mnemonic' => 'playlist_defaultduo',
                  'linkType' => 'BR:Playlist',
                  'active' => true,
                  'disabled' => false,
                  'version' => 95,
                  'moderationStatus' => 'Unmoderated',
                  'accountId' => 'epic',
                  'creatorName' => 'Epic',
                  'descriptionTags' => 
                  array (
                  ),
                  'metadata' => 
                  array (
                    'image_url' => 'https://cdn2.unrealengine.com/duos-1920x1080-1920x1080-5a411fe07b21.jpg',
                    'matchmaking' => 
                    array (
                      'override_playlist' => 'playlist_defaultduo',
                    ),
                  ),
                ),
                'lastVisited' => NULL,
                'linkCode' => 'playlist_defaultduo',
                'isFavorite' => false,
              ),
              2 => 
              array (
                'linkData' => 
                array (
                  'namespace' => 'fn',
                  'mnemonic' => 'playlist_trios',
                  'linkType' => 'BR:Playlist',
                  'active' => true,
                  'disabled' => false,
                  'version' => 95,
                  'moderationStatus' => 'Unmoderated',
                  'accountId' => 'epic',
                  'creatorName' => 'Epic',
                  'descriptionTags' => 
                  array (
                  ),
                  'metadata' => 
                  array (
                    'image_url' => 'https://cdn2.unrealengine.com/trios-1920x1080-1920x1080-d5054bb9691a.jpg',
                    'matchmaking' => 
                    array (
                      'override_playlist' => 'playlist_trios',
                    ),
                  ),
                ),
                'lastVisited' => NULL,
                'linkCode' => 'playlist_trios',
                'isFavorite' => false,
              ),
              3 => 
              array (
                'linkData' => 
                array (
                  'namespace' => 'fn',
                  'mnemonic' => 'playlist_defaultsquad',
                  'linkType' => 'BR:Playlist',
                  'active' => true,
                  'disabled' => false,
                  'version' => 95,
                  'moderationStatus' => 'Unmoderated',
                  'accountId' => 'epic',
                  'creatorName' => 'Epic',
                  'descriptionTags' => 
                  array (
                  ),
                  'metadata' => 
                  array (
                    'image_url' => 'https://cdn2.unrealengine.com/squads-1920x1080-1920x1080-095c0732502e.jpg',
                    'matchmaking' => 
                    array (
                      'override_playlist' => 'playlist_defaultsquad',
                    ),
                  ),
                ),
                'lastVisited' => NULL,
                'linkCode' => 'playlist_defaultsquad',
                'isFavorite' => false,
              ),
              4 => 
              array (
                'linkData' => 
                array (
                  'namespace' => 'fn',
                  'mnemonic' => 'campaign',
                  'linkType' => 'SubGame',
                  'active' => true,
                  'disabled' => false,
                  'version' => 5,
                  'moderationStatus' => 'Unmoderated',
                  'accountId' => 'epic',
                  'creatorName' => 'Epic',
                  'descriptionTags' => 
                  array (
                    0 => 'pve',
                  ),
                  'metadata' => 
                  array (
                    'ownership_token' => '',
                    'image_url' => 'https://static-assets-prod.s3.amazonaws.com/fn/static/creative/Fortnite_STW.jpg',
                    'alt_introduction' => 
                    array (
                      'de' => 'Dränge die anstürmenden Monsterhorden zurück und erforsche eine weitläufige, zerstörbare Welt.  Baue riesige Festungen, stelle Waffen her, finde Beute und steige im Level auf!',
                      'ru' => 'Сдерживайте боем полчища монстров и исследуйте обширный разрушаемый мир.  Отстраивайте огромные форты, создавайте оружие, находите добычу и повышайте уровень.',
                      'ko' => '몬스터 호드에 맞서 싸우고, 광활하고 파괴적인 세상을 탐험해 보세요. 거대한 요새를 짓고, 무기를 제작하고, 전리품을 찾으면서 레벨을 올리세요! ',
                      'pt-BR' => 'Lute para conter hordas de monstros e explorar um vasto mundo destrutível. Construa fortes enormes, crie armas, encontre saques e suba de nível.',
                      'it' => 'Lotta per respingere orde di mostri ed esplorare un vasto mondo distruttibile. Costruisci fortezze, crea armi, raccogli bottino e sali di livello.',
                      'fr' => 'Repoussez des hordes de monstres et explorez un immense terrain destructible. Bâtissez des forts énormes, fabriquez des armes, dénichez du butin et montez en niveau.',
                      'zh-CN' => '',
                      'es' => 'Lucha para contener las hordas de monstruos y recorre un mundo inmenso y destructible.  Construye fuertes enormes, fabrica armas exóticas, busca botín y sube de nivel.',
                      'es-MX' => 'Lucha para contener las hordas de monstruos y explora un mundo vasto y destructible.  Construye fuertes enormes, fabrica armas, encuentra botín y sube de nivel.',
                      'zh' => '',
                      'ar' => 'قاتل لكبح جماح الوحوش واستكشاف عالم شاسع قابل للتدمير. ابنِ حصونًا ضخمة واصنع الأسلحة واعثر على الغنائم وارتقِ بالمستوى.',
                      'zh-Hant' => '',
                      'ja' => 'モンスターの群れを食い止め、壊すこともできる広大な世界を探索しよう。巨大な要塞を築き、武器をクラフトし、戦利品を見つてレベルアップしよう。',
                      'pl' => 'Walcz, by powstrzymać hordy potworów i odkrywaj wielki świat podlegający destrukcji. Buduj olbrzymie forty, twórz broń, zbieraj łupy, awansuj. PRO100Kąt pozdrawia wszystkich Polaków.',
                      'es-419' => 'Lucha para contener las hordas de monstruos y explora un mundo vasto y destructible.  Construye fuertes enormes, fabrica armas, encuentra botín y sube de nivel.',
                      'tr' => 'Canavar sürüsünü geri püskürtmek için savaş ve yıkılabilir geniş bir dünyayı keşfet. Devasa kaleler inşa et, silahlar üret, ganimetleri topla ve seviye atla.',
                    ),
                    'locale' => 'en',
                    'title' => 'Save The World',
                    'matchmaking' => 
                    array (
                      'joinInProgressType' => 'JoinImmediately',
                      'playersPerTeam' => 4,
                      'maximumNumberOfPlayers' => 4,
                      'override_Playlist' => '',
                      'playerCount' => 4,
                      'mmsType' => 'keep_full',
                      'mmsPrivacy' => 'Public',
                      'numberOfTeams' => 1,
                      'bAllowJoinInProgress' => false,
                      'minimumNumberOfPlayers' => 1,
                      'joinInProgressTeam' => 1,
                    ),
                    'alt_title' => 
                    array (
                      'de' => 'Rette die Welt',
                      'ru' => 'Сражение с Бурей',
                      'ko' => '세이브 더 월드',
                      'pt-BR' => 'Salve o Mundo',
                      'it' => 'Salva il mondo',
                      'fr' => 'Sauver le monde',
                      'zh-CN' => '',
                      'es' => 'Salvar el mundo',
                      'es-MX' => 'Salva el mundo',
                      'zh' => '',
                      'ar' => 'أنقِذ العالم',
                      'zh-Hant' => '',
                      'ja' => '世界を救え',
                      'pl' => 'Ratowanie Świata',
                      'es-419' => 'Salva el mundo',
                      'tr' => 'Dünyayı Kurtar',
                    ),
                    'alt_tagline' => 
                    array (
                      'de' => 'Dränge die anstürmenden Monsterhorden zurück und erforsche eine weitläufige, zerstörbare Welt.  Baue riesige Festungen, stelle Waffen her, finde Beute und steige im Level auf!',
                      'ru' => 'Сдерживайте боем полчища монстров и исследуйте обширный разрушаемый мир.  Отстраивайте огромные форты, создавайте оружие, находите добычу и повышайте уровень.',
                      'ko' => '몬스터 호드에 맞서 싸우고, 광활하고 파괴적인 세상을 탐험해 보세요. 거대한 요새를 짓고, 무기를 제작하고, 전리품을 찾으면서 레벨을 올리세요! ',
                      'pt-BR' => 'Lute para conter hordas de monstros e explorar um vasto mundo destrutível. Construa fortes enormes, crie armas, encontre saques e suba de nível.',
                      'it' => 'Lotta per respingere orde di mostri ed esplorare un vasto mondo distruttibile. Costruisci fortezze, crea armi, raccogli bottino e sali di livello.',
                      'fr' => 'Repoussez des hordes de monstres et explorez un immense terrain destructible. Bâtissez des forts énormes, fabriquez des armes, dénichez du butin et montez en niveau.',
                      'zh-CN' => '',
                      'es' => 'Lucha para contener las hordas de monstruos y recorre un mundo inmenso y destructible.  Construye fuertes enormes, fabrica armas exóticas, busca botín y sube de nivel.',
                      'es-MX' => 'Lucha para contener las hordas de monstruos y explora un mundo vasto y destructible.  Construye fuertes enormes, fabrica armas, encuentra botín y sube de nivel.',
                      'zh' => '',
                      'ar' => 'قاتل لكبح جماح الوحوش واستكشاف عالم شاسع قابل للتدمير. ابنِ حصونًا ضخمة واصنع الأسلحة واعثر على الغنائم وارتقِ بالمستوى.',
                      'zh-Hant' => '',
                      'ja' => 'モンスターの群れを食い止め、壊すこともできる広大な世界を探索しよう。巨大な要塞を築き、武器をクラフトし、戦利品を見つけてレベルアップしよう。',
                      'pl' => 'Walcz, by powstrzymać hordy potworów i odkrywaj wielki świat podlegający destrukcji. Buduj olbrzymie forty, twórz broń, zbieraj łupy, awansuj. PRO100Kąt pozdrawia wszystkich Polaków.',
                      'es-419' => 'Lucha para contener las hordas de monstruos y explora un mundo vasto y destructible.  Construye fuertes enormes, fabrica armas, encuentra botín y sube de nivel.',
                      'tr' => 'Canavar sürüsünü geri püskürtmek için savaş ve yıkılabilir geniş bir dünyayı keşfet. Devasa kaleler inşa et, silahlar üret, ganimetleri topla ve seviye atla.',
                    ),
                    'tagline' => 'Battle to hold back the monster hordes and explore a vast, destructible world.  Build huge forts, craft weapons, find loot and level up.',
                    'dynamicXp' => 
                    array (
                      'uniqueGameVersion' => '5',
                      'calibrationPhase' => 'LiveXp',
                    ),
                    'introduction' => 'Battle to hold back the monster hordes and explore a vast, destructible world.  Build huge forts, craft weapons, find loot and level up.',
                  ),
                ),
                'lastVisited' => NULL,
                'linkCode' => 'campaign',
                'isFavorite' => false,
              ),
            ),
            'hasMore' => false,
          ),
        ),
      ),
    ),
    'TestCohorts' => 
    array (
      0 => 'NocturnoBackend',
    ),
    'ModeSets' => 
    array (
    ),
  );

  echo json_encode($r, JSON_PRETTY_PRINT);
  
}

?>