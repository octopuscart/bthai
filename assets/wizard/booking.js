App.controller('bookingController', function ($scope, $http, $timeout, $interval) {
    $scope.bookingArray = {
        "book_type": 'Reserve',
        "people": 1,
        "select_date": today,
        "select_time": "--:--:--"
    };
    $scope.changeWizard = function () {
        if ($scope.bookingArray.select_time != "--:--:--") {
            $("#nav-profile-tab").tab("show");
        }
    }


    $scope.changeWizardProfile = function () {
        $("#nav-profile-tab").tab("show");
    }

    $scope.changeWizardTime = function () {
        $("#nav-datetime-tab").tab("show");
    }
    
    $scope.bookType = function(btype){
        $scope.bookingArray.book_type = btype;
    }





    $scope.changePeople = function (func) {
        console.log(func)
        if (func == 'plus') {
            $scope.bookingArray.people += 1;
        } else {
            if ($scope.bookingArray.people != 1) {
                $scope.bookingArray.people -= 1;
            }
        }
    }


    $scope.selectTime = function (ttime) {
        $scope.bookingArray.select_time = ttime;
        $scope.changeWizard();
    }


    $scope.selectedDate = function (datef) {
        let ssdate = new Date(datef);
        let selectslot = $scope.initWizard.time[$scope.initWizard.selecttime[ssdate.getDay()]];
        let datecheck = moment(datef);
        var dateformated = datecheck.format('YYYY-MM-DD');
        let ttslot = ["00", "30", ];
        let selectTimeSlot = [];
        for (st in selectslot) {
            let tempst = selectslot[st];
            let splittempst = tempst.split(":");
            let ftime = splittempst[0];
            let sufix = splittempst.length == 2 ? splittempst[1] : "PM";
            for (tt in ttslot) {
                let temptt = ttslot[tt];
                let timetemp = (ftime + ":" + temptt + ":" + sufix);
                let stimef = Date.parse(dateformated + " " + timetemp);
                let ntimeft = new Date();
                let ntimef = Date.parse(ntimeft);
                if (ntimef < stimef) {
                    selectTimeSlot.push(timetemp);
                }
                if (sufix == 'AM') {
//                        selectTimeSlot.push(timetemp);
                }

                console.log(selectTimeSlot)

            }
        }
        $scope.initWizard.timeslot = selectTimeSlot;
    }

    $scope.initWizard = {
        "split": ["00", "15", "30", "45"],
        "time": {
            "TS": ['12', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12:AM', '01:AM'],
            "MWS": ['12', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11'],
        },
        "selecttime": {4: "TS", 5: "TS", 6: "TS", 0: "MWS", 1: "MWS", 2: "MWS", 3: "MWS"},
        "timeslot": []
    }

    $scope.selectedDate(today);
    $scope.initWiz = function (today) {
        $('#datepicker-inline').datepicker({
            format: 'yyyy-mm-dd',
            startDate: today
        }).on("click", function (e) {
            let sdate = ($('#datepicker-inline').datepicker("getDate"));
            $timeout(function () {
                if(sdate){
                $scope.selectedDate(sdate);
                let datecheck = moment(sdate);
                var dateformated = datecheck.format('YYYY-MM-DD');
                $scope.bookingArray.select_date = dateformated;
            }
            });
        });
    }

    $timeout(function () {
        $scope.initWiz(today)
    });
})

