<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дз2");
?>
<?$APPLICATION->IncludeComponent(
	"ylab:promo", 
	".default",
)
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>