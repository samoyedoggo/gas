console.log("GitHub New Function!");

function postJsonToGas() {
    // var URL = "https://script.google.com/macros/s/XXXXXXXXXXXX/exec";
    var URL = "https://script.google.com/macros/s/AKfycby_6rYqqcZkfPNNpbO06L-kdvci6nXpt0Rwqp2iPS2k2F-DPTF_XaAkpyMhNGSR2Q6paQ/exec";
    var value1 = 'サモエド';

    // var SendDATA = {
    //    "param1" : value1,
    //    "param2" : value2,
    //    "param3" : {
    //       "subparam1" : subvalue1,
    //       "subparam2" : subvalue2
    //    }
    // };
    var SendDATA = {
    "param1" : value1,
    };

    var postparam = 
        {
            "method"     : "POST",
            "mode"       : "no-cors",
            "Content-Type" : "application/x-www-form-urlencoded",
            "body" : JSON.stringify(SendDATA)
        };

    fetch(URL, postparam);
    alert('実行したよ');
}
