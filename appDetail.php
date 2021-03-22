<?php

function getDetail($detailIndex){

	switch ($detailIndex) {

		case '0':
			$title = "TMT";
			$description = "TMT是一款針對嬰兒所設計的體溫監控的APP，溫度計是以貼片的方式貼在嬰兒身上並連續測量體溫10小時，裝置每分鐘會進行一次量測，並在藍芽連線後回傳所儲存的體溫紀錄至APP並以圖表方式呈現，TMT也提供紀錄的功能方便使用者做長期追蹤。
			";
			$parts = "介面製作、藍芽通訊協定串接。";
			$imageSrc = array(
			"images/screenShots/TMT/TMT01.png",
			"images/screenShots/TMT/TMT02.jpg",
			"images/screenShots/TMT/TMT03.jpg",
			"images/screenShots/TMT/TMT04.jpg",
			"images/screenShots/TMT/TMT05.jpg"
			);

			$parts ="
			<li>介面製作
			<li>藍芽通訊協定串接";
		break;

		case '1':
			$title = "KubyCam";
			$description = "KubyCam是一款針對寵物所設計的網路攝影機，藉由裝置所回傳的影像讓使用者能即時監控寵物狀況，使用者可以利用APP的表情按鈕或講功能與寵物互動，此外還有拍照及錄影功能捕捉即時影像。消費者可以購買多台攝影機，註冊後可以最多可同時監控4台影像。";
			$parts = "介面製作。";
			$imageSrc = array(
			"images/screenShots/KubyCam/KubyCam01.png",
			"images/screenShots/KubyCam/KubyCam02.png",
			"images/screenShots/KubyCam/KubyCam03.png",
			"images/screenShots/KubyCam/KubyCam04.png",
			"images/screenShots/KubyCam/KubyCam05.png"
			);

			$parts ="
			<li>介面製作
			";

		break;

		case '2':
			$title = "Needs";
			$description = "Needs是一款專媒合的APP，商家可將自家店面的形象及促銷訊息上傳至平台以提供消費者瀏覽，而商家是以瀑布流的方式顯示在手機介面上，使消費者能夠輕鬆瀏覽訊息，並且對商店進行關注與評論。
			";
			$parts = "介面製作、API串接、facebook、Google、Twitter第三方登入。";
			$imageSrc = array(
			"images/screenShots/Needs/needs01.png",
			"images/screenShots/Needs/needs02.png",
			"images/screenShots/Needs/needs03.png",
			"images/screenShots/Needs/needs04.png",
			"images/screenShots/Needs/needs05.png"
			);

			$parts ="
			<li>介面製作
			<li>API串接";
		break;

		case '3':
			$title = "Brook Sniper";
			$description = "Brook Sniper是一款針對射擊遊戲所設計的APP，消費者購買硬體後可將搖桿的控制設定利用APP轉為鍵盤及滑鼠並自訂控制方式，此外還能讓使用者儲存八組不同巨集及控制設定以便及時切換。";
			$parts = "介面製作、藍芽通訊協定串接、API串接、facebook、Google、Twitter第三方登入。";
			$imageSrc = array(
			"images/screenShots/BrookSniper/brook01.jpeg",
			"images/screenShots/BrookSniper/brook02.jpeg",
			"images/screenShots/BrookSniper/brook03.jpeg",
			"images/screenShots/BrookSniper/brook04.jpeg",
			"images/screenShots/BrookSniper/brook05.jpeg"
			);

			$parts ="
			<li>介面製作
			<li>藍芽通訊協定串接
			<li>API串接";
		break;

		case '4':
			$title = "Gpro 無平衡翼系統";
			$description = "Gpro是一款專為遙控直昇機玩家所設計的行動App，使得玩家調整飛行參數不必再透過電腦，利用藍芽4.0將飛行參數即時傳輸至直升機。
			";
			$parts = "介面製作、藍芽通訊協定串接。";
			$imageSrc = array(
			"images/screenShots/Gpro/Gpro01.jpeg",
			"images/screenShots/Gpro/Gpro02.jpeg",
			"images/screenShots/Gpro/Gpro03.jpeg",
			"images/screenShots/Gpro/Gpro04.jpeg",
			"images/screenShots/Gpro/Gpro05.jpeg"
			);

			$parts ="
			<li>介面製作
			<li>藍芽通訊協定串接"
			;

		break;
		
		case '5':
			$title = "APS-M 多軸飛控系統";
			$description = "APS-M 多軸飛控系統是一款為多軸飛行器所設計的行動App，使得玩家調整飛行參數不必再透過電腦，利用藍芽4.0將飛行參數即時傳輸至飛行器。
			";
			$parts = "介面製作、藍芽通訊協定串接。";
			$imageSrc = array(
			"images/screenShots/APS-M/APS-M01.jpeg",
			"images/screenShots/APS-M/APS-M02.jpeg",
			"images/screenShots/APS-M/APS-M03.jpeg",
			"images/screenShots/APS-M/APS-M04.jpeg",
			"images/screenShots/APS-M/APS-M05.jpeg"
			);

			$parts ="
			<li>介面製作
			<li>藍芽通訊協定串接"
			;
		break;

		case '6':
			$title = "Gimbal 雲台系統";
			$description = "Gimbal 雲台系統是一款專為熱愛空拍的玩家所設計的行動App，使得玩家調整飛行參數不必再透過電腦，利用藍芽4.0將雲台拍照模式及參數設定傳送至空拍機所搭載的雲台。
			";
			$parts = "介面製作、藍芽通訊協定串接。";
			$imageSrc = array(
			"images/screenShots/Gimbal/Gimbal01.jpeg",
			"images/screenShots/Gimbal/Gimbal02.jpeg",
			"images/screenShots/Gimbal/Gimbal03.jpeg",
			"images/screenShots/Gimbal/Gimbal04.jpeg",
			"images/screenShots/Gimbal/Gimbal05.jpeg"
			);

			$parts ="
			<li>介面製作
			<li>藍芽通訊協定串接"
			;
		break;

		case '7':
			$title = "亞拓官網";
			$description = "亞拓官網是將公司舊官網全面更新在2014年以全新的面貌與消費者見面，利用Wordpress所提供的後台系統讓非程式人員也能對官網進行更新及修改。";
			$parts = "頁面製作、facebook API串接。";
			$imageSrc = array(
			"images/screenShots/Align/Align01.png",
			"images/screenShots/Align/Align02.png",
			"images/screenShots/Align/Align03.png",
			"images/screenShots/Align/Align04.png",
			"images/screenShots/Align/Align05.png"
			);

			$parts ="
			<li>頁面製作
			<li>網站流程規劃"
			;
		break;

		default:
					# code...
		break;
	}

	$detail = array($title, $description, $imageSrc);

	return $detail;
};

?>