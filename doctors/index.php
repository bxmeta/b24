<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>
<?php
$doctorList = \Models\Lists\DoctorsPropertyValuesTable::query()
    ->setSelect([
        'ID' => 'ELEMENT.ID',
        'NAME' => 'ELEMENT.NAME',
    ])
    ->setOrder(['NAME' => 'ASC'])
    ->fetchAll();
?>

<?php if (!empty($doctorList)): ?>
<ul>
    <?php foreach ($doctorList as $arItem): ?>
    <li>
        <a href="/doctors/view/<?=$arItem['ID']?>/"><?=$arItem['NAME']?></a>
    </li>
    <?php endforeach;?>
</ul>
<?php endif;?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
