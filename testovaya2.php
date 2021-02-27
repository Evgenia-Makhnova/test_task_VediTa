<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тестовая2");
?><?

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css" );
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>2, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);

echo "<table id=\"select\" cellpadding=\"5\" cellspacing=\"0\" border=\"1\">";
echo "<tr>";
echo "<td>"; echo "Наименование"; echo "</td>";
echo "<td>"; echo "Цена"; echo "</td>";
echo "</tr>";
while($ob = $res->GetNextElement()){

    echo "<tr>";
    echo "<td>"; $arFields = $ob->GetFields(); print_r($arFields["NAME"]); echo " "; echo "</td>";
    echo "<td>"; $arProps = $ob->GetProperties(); print_r($arProps["PRICE"]["VALUE"]); echo "</td>";
    echo "</tr>";
}
echo "</table>";
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/file.js" );
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>