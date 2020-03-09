/* 
 Shop Cart product controllers
 */
App.controller('ShopController', function ($scope, $http, $timeout, $interval, $filter) {
    $scope.userLogin = {};

    $scope.getLoginDetails2 = function () {
        var loginurl = baseurl + "Api/loginOperation"
        $http.get(loginurl).then(function (rdata) {
            let userdata = rdata.data;
            console.log(userdata)
            if (userdata) {
                $scope.userLogin = userdata
            }
        })
    }
    $scope.getLoginDetails2();
    $timeout(function () {
        jQuery(jQuery("i.ion-ios-create").parents("li")[0]).addClass("active")
    }, 1000)


    

    $scope.promotionImage = {"img": "", "link":""};
    $scope.selectePromotionImage = function (image, link) {
        console.log(image, link)
        $scope.promotionImage.img = image;
        $scope.promotionImage.link = link;
    }




})


App.controller('ProductDetails', function ($scope, $http, $timeout, $interval, $filter) {
    $scope.productver = {'quantity': 1};
    $scope.updateCartDetail = function (oper) {
        console.log(oper)
        if (oper == 'sub') {
            if ($scope.productver.quantity == 1) {
            } else {
                $scope.productver.quantity = Number($scope.productver.quantity) - 1;
            }
        }
        if (oper == 'add') {
            if ($scope.productver.quantity > 5) {
            } else {
                $scope.productver.quantity = Number($scope.productver.quantity) + 1;
            }
        }
    }

    $(function () {
        $(".select2").on('select2:select', function (e) {
            var data = e.params.data;
            var url = baseurl + "Product/ProductDetails/" + data.id + "";
            window.location = url;
        });
    })
})