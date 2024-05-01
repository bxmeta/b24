<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>

<?php
$result = [];
if (!empty($_REQUEST['ID'])) {
    $result = \Models\Lists\DoctorsPropertyValuesTable::query()
        ->setSelect([
            'ID' => 'ELEMENT.ID',
            'NAME' => 'ELEMENT.NAME',
            'PROCEDURE_LIST' => 'PROCEDURE_ID_ELEMENT_NAME'
        ])
        ->where('ID', (int)$_REQUEST['ID'])
        ->setOrder(['NAME' => 'ASC'])
        ->fetch();
}
?>
<? if (!empty($result)): ?>
<?pr($result)?>
<? endif; ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
