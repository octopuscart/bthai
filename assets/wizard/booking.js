App.controller('bookingController', function ($scope, $http, $timeout, $interval) {
    $scope.bookingArray = {
        "book_type": 'Reserve',
        "people": 1,
        "select_date": today,
        "select_time": "",
        "select_table": "--",
        "first_name": "",
        "last_name": "",
        "email": "",
        "usertype": "Guest",
        "contact_no": "",
        "location": "Central Branch"
    };





    $scope.changeWizard = function () {
        if ($scope.bookingArray.select_time != "") {
            $("#nav-table-tab").tab("show");
        }
    }


    $scope.changeWizardProfile = function () {
        $("#nav-profile-tab").tab("show");
    }

    $scope.changeWizardTime = function () {
        $("#nav-datetime-tab").tab("show");
    }

    $scope.changeWizardTble = function () {
        $("#nav-table-tab").tab("show");
    }

    $scope.bookType = function (btype) {
        $scope.bookingArray.book_type = btype;
    }


    $scope.selectTable = function (table) {
        $scope.bookingArray.select_table = table;
        $scope.changeWizardProfile();
    }

    $scope.loginNow = function () {
        $scope.initWizard.logincheck = 0;
    }





    $scope.changePeople = function (func) {

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

    $scope.continueWithoutLogin = function () {
        $scope.initWizard.logincheck = 2;
    }


    $scope.selectedDate = function (datef) {
        console.log(datef);
        let ssdate = new Date(datef);
        let datetemp = moment(datef);
        let selectslot = $scope.initWizard.time[$scope.initWizard.selecttime[ssdate.getDay()]];
        var dateformated = datetemp.format('YYYY-MM-DD');
        if ($scope.initWizard.booked_dates.indexOf(dateformated) > -1) {
            selectslot = $scope.initWizard.time[$scope.initWizard.selecttime["SPE"]];
        }


        if ($scope.initWizard.partbooking.indexOf(dateformated) > -1) {
            selectslot = $scope.initWizard.time[$scope.initWizard.selecttime["SPE"]];
        }



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


            }
        }
        $scope.initWizard.timeslot = selectTimeSlot;
    }
//date blocking code
    var datearray = listofbookeddate;
    $scope.getnextDate = function (tdate) {
        var next_date = moment(tdate).add(1, 'days');
        return (next_date.format("YYYY-MM-DD"));
    }
    var nextAvailableDate = moment().format("YYYY-MM-DD");
    var nextAvailableDate2 = moment().format("YYYY-MM-DD");


    for (dt in datearray) {
        var ddt = $scope.getnextDate(datearray[dt]);
        var ddt2 = datearray[Number(dt) + 1];
        if (ddt != ddt2) {
            nextAvailableDate = ddt;
            break
        }
    }
    var initdate = nextAvailableDate;
    if (datearray.indexOf(nextAvailableDate2) > (-1)) {
        var initdate = nextAvailableDate;
    } else {
        var initdate = nextAvailableDate2;
    }

    //date blocking code


    $scope.changeLocation = function () {

        if ($scope.bookingArray.location == 'Central Branch') {

        } else {
            if ($scope.bookingArray.select_date == "2020-12-26") {
                console.log("booking blocked")
            }
            ;
        }
    }



    $scope.initWizard = {
        "enablebookingbutton": "1",
        "enablemessage": "",

        "split": ["00", "15", "30", "45"],
        "time": {
            "TS": ['12', '01', '02', '03', '04', '05', '06', '07', '08', ],
            "MWS": ['12', '01', '02', '03', '04', '05', '06', '07', '08', ],
            "BKD": ['12', '01', '02', '03', '04']
        },
        "selecttime": {4: "TS", 5: "TS", 6: "TS", 0: "MWS", 1: "MWS", 2: "MWS", 3: "MWS", "SPE": "BKD"},
        "timeslot": [],
        "booked_dates": listofbookeddate,
        "partbooking": [
            '2021-01-06', '2021-01-07', '2021-01-08', '2021-01-09', '2021-01-10', '2021-01-11', '2021-01-12', '2021-01-13', '2021-01-14', '2021-01-15', '2021-01-16', '2021-01-17', '2021-01-18', '2021-01-19', '2021-01-20'
        ],
        "partbooking2": [
            '2021-01-06', '2021-01-07', '2021-01-08', '2021-01-09', '2021-01-10', '2021-01-11', '2021-01-12', '2021-01-13', '2021-01-14', '2021-01-15', '2021-01-16', '2021-01-17', '2021-01-18', '2021-01-19', '2021-01-20', '2021-01-21', '2021-01-22', '2021-01-23', '2021-01-24', '2021-01-25', '2021-01-26', '2021-01-27', '2021-01-28', '2021-01-29', '2021-01-30', '2021-01-31'
        ],
        "tables": {
            "zone_g": ["ZG1", "ZG2", "ZG3", "ZG4", "ZG5", "ZG6"],
            "zone_f": ["ZF1", "ZF2", "ZF3", "ZF4", "ZF5", "ZF6", "ZF7", "ZF8"],
        },
        "logincheck": 0,
        "login": {"email": "", "password": ""}
    }

    $scope.getLoginDetails = function () {
        var loginurl = baseurl + "Api/loginOperation"
        $http.get(loginurl).then(function (rdata) {
            let userdata = rdata.data;
            if (userdata) {
                $scope.bookingArray.first_name = userdata.first_name;
                $scope.bookingArray.last_name = userdata.last_name;
                $scope.bookingArray.email = userdata.email;
                $scope.bookingArray.contact_no = userdata.contact_no;
                $scope.bookingArray.usertype = userdata.id;
                $scope.initWizard.logincheck = 3;
            }
        })
    }

    $scope.getLoginDetails();


    $scope.loginFunction = function () {
        var form = new FormData()
        form.append('email', $scope.initWizard.login.email);
        form.append('password', $scope.initWizard.login.password);
        var loginurl = baseurl + "Api/loginOperation"
        $http.post(loginurl, form).then(function (rdata) {
            let userdata = rdata.data;
            $scope.bookingArray.first_name = userdata.first_name;
            $scope.bookingArray.last_name = userdata.last_name;
            $scope.bookingArray.email = userdata.email;
            $scope.bookingArray.contact_no = userdata.contact_no;
            $scope.bookingArray.usertype = userdata.id;
            $scope.initWizard.logincheck = 3;
        })
    }


    $scope.selectedDate(initdate);
    $scope.initWiz = function (today) {
        var disableDates = listofbookeddate;


        $('#datepicker-inline').datepicker({
            format: 'yyyy-mm-dd',
            startDate: today,
            beforeShowDay: function (date) {

                dmy = moment(date).format('YYYY-MM-DD');

                if (disableDates.indexOf(dmy) != -1) {

                    return false;

                } else {

                    return true;

                }

            }
        }).on("changeDate", function (e) {
            let sdate = ($('#datepicker-inline').datepicker("getDate"));
            $('#datepicker-inline').datepicker("hide");
            $timeout(function () {
                if (sdate) {
                    $scope.selectedDate(sdate);
                    let datecheck = moment(sdate);
                    var dateformated = datecheck.format('YYYY-MM-DD');
                    $scope.bookingArray.select_date = dateformated;
                }
            });
            console.log(sdate);
        }).on("click", function (e) {
            let sdate = ($('#datepicker-inline').datepicker("getDate"));
            $timeout(function () {
                if (sdate) {
                    $scope.selectedDate(sdate);
                    let datecheck = moment(sdate);
                    var dateformated = datecheck.format('YYYY-MM-DD');
                    $scope.bookingArray.select_date = dateformated;
                }
            });
        });
    }

    $timeout(function () {

        $scope.bookingArray.select_date = initdate;
        $scope.initWiz(initdate)
    });
})

