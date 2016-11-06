<?php
if (isset ($_POST['neved']) && isset($_POST['email']) && isset($_POST['szoveg']))
{
$kuldo_neve = $_POST['neved'];
$kuldo_email = $_POST['email'];
$kuldo_comment = $_POST['szoveg'];
mail ('Clava01@gmail.com', 'Üzenet az oldaladrol', "Név: $kuldo_neve Email: $kuldo_email Hozzászólás: $kuldo_comment" . date('d/m/Y H:i:s'), "FROM: $kuldo_email Reply-To: $kuldo_email"); }
else
{
echo ('Nem toltotted ki az osszes mezot');
}
?>