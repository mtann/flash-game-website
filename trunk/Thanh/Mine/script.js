var index=0;
var ImageArray = new Array();
ImageArray[0]="xdeal/Ao-khoac-cardigan-form-dai-PL28-34228050.Jpg";
ImageArray[1]="xdeal/Ao-khoac-nu-Violet-thoi-trang-XD107-33938001.Jpg";
ImageArray[2]="xdeal/Ao-so-mi-nu-nhung-Classic-phoi-tui-MS09-36098242.Jpg";
ImageArray[3]="xdeal/Ao-thun-nam-co-tru-thoi-trang-MT77-CT77-31667819.Jpg";
ImageArray[4]="xdeal/Ao-thun-nam-kieu-dang-Polo-thoi-trang-PLo-Xanh-Ngoc-32257864.Jpg";
ImageArray[5]="xdeal/Ao-thun-nam-tay-ngan-ca-tinh-RL22-YO54-35558170.Jpg";
ImageArray[6]="xdeal/Ao-thun-nu-hoa-tiet-Kitty-no-HD33-W1039-35968217.Jpg";
ImageArray[7]="xdeal/Ao-thun-nu-tay-ngan-in-hinh-dreamcatcher-CP03-33397952.Jpg";
ImageArray[8]="xdeal/Ao-thun-vay-ca-nam-Xanh-la-RL11-CT1137-35128137.Jpg";
ImageArray[9]="xdeal/Combo-3-ao-thun-ba-lo-nam-thoi-trang-CR30-32217813.Jpg";
ImageArray[10]="xdeal/Dam-Maxi-phoi-soc-ca-tinh-MT126-35778202.Jpg";
ImageArray[11]="xdeal/Dam-suong-thoi-trang-phoi-mau-GN05-31147667.Jpg";
ImageArray[12]="xdeal/Dam-xoe-duoi-ca-hoa-tiet-so-HS07-36228235.Jpg";
ImageArray[13]="xdeal/Dong-ho-cap-Beinuo-8117-dinh-hat-35898247.Jpg";
ImageArray[14]="xdeal/Dong-ho-nam-Tissot-i853-Fashion-14844691.jpg";
ImageArray[15]="xdeal/Giay-cao-got-cach-dieu-quai-cheo-C044-21236305.Jpg";
ImageArray[16]="xdeal/Giay-nam-thoi-trang-vien-chi-noi-C78-17975627.jpg";
ImageArray[17]="xdeal/Quan-short-kaki-nam-phoi-mau-DT37-35598233.Jpg";
ImageArray[18]="xdeal/Quan-short-nam-thun-bo-lung-PA02-36068244.Jpg";
ImageArray[19]="xdeal/Quan-short-nam-thun-bo-lung-PA02-36068244.Jpg";
function rotateAdsImages(){
	document.getElementById('product-1').src=ImageArray[index];
	index++;
	document.getElementById('product-2').src=ImageArray[index];
	index++;
	if(index>=ImageArray.length)
		index = 0;
	setTimeout(rotateAdsImages, 3000);
}


var articleIndex=0;
var articleImageArray = new Array();
var articleTitleArray = new Array();
articleImageArray[0]="topads/13660816991001-83db3.jpg";
articleImageArray[1]="topads/dota2_image1-bacc4.jpg";
articleImageArray[2]="topads/DSC_8621s960x639-5a99f.JPG";
articleImageArray[3]="topads/gn0421zs03-24287.jpg";
articleImageArray[4]="topads/Untitled-0a15d.jpg";
articleImageArray[5]="topads/yuan_assassins_creed_012013_2-ea99f.jpg";
articleTitleArray[0]="Lien Minh Huyen Thoai 0";
articleTitleArray[1]="Lien Minh Huyen Thoai 1";
articleTitleArray[2]="Lien Minh Huyen Thoai 2";
articleTitleArray[3]="Lien Minh Huyen Thoai 3";
articleTitleArray[4]="Lien Minh Huyen Thoai 4";
articleTitleArray[5]="Lien Minh Huyen Thoai 5";
function fadeOutArticle(){
	document.getElementById('image-1').src=articleImageArray[articleIndex];
	document.getElementById('article-title-1').innerHTML=articleTitleArray[articleIndex];
	articleIndex++;
	document.getElementById('image-2').src=articleImageArray[articleIndex];
	document.getElementById('article-title-2').innerHTML=articleTitleArray[articleIndex];
	articleIndex++;
	if(articleIndex>=articleImageArray.length)
		articleIndex=0;
	setTimeout(fadeOutArticle, 3000);
}