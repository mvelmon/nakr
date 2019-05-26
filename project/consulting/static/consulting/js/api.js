$(function () {
//$(document).ready(function(){

/**
* Events Part starts Here!
* 
*/
/*
    $('#datetimepicker1').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    /*
    $('#datetimepicker2').datetimepicker({
        format: 'DD/MM/YYYY',
        defaultDate : $('#EventHDateRec').val()
    });
    */
    /*
    $("input[name='touchspin1']").TouchSpin({
        verticalbuttons: true,
        min: 0,
        max: 600,
        verticalupclass: 'glyphicon glyphicon-plus',
        verticaldownclass: 'glyphicon glyphicon-minus',
        step: 15
    });
    /*
    $("input[name='touchspin2']").TouchSpin({
        verticalbuttons: true,
        min: 0,
        max: 600,
        verticalupclass: 'glyphicon glyphicon-plus',
        verticaldownclass: 'glyphicon glyphicon-minus',
        step: 15,
        initval: $( '#EventEasyDurationRec' ).val()
    });
    */
    /*
    $( '#bootstrapswitch1' ).bootstrapSwitch();
    $( '#bootstrapswitch1').bootstrapSwitch( 'size', 'normal' );
    $( '#bootstrapswitch1').bootstrapSwitch( 'onText', "Yes" );
    $( '#bootstrapswitch1').bootstrapSwitch( 'data-on-color', 'success' );
    $( '#bootstrapswitch1').bootstrapSwitch( 'state', false );
    $( '#bootstrapswitch1').bootstrapSwitch( 'offText', "No" );
    $( '#bootstrapswitch1').bootstrapSwitch( 'data-on-color', 'warning' );
    /*
    $( '#bootstrapswitch2' ).bootstrapSwitch();
    $( '#bootstrapswitch2').bootstrapSwitch( 'size', 'normal' );
    $( '#bootstrapswitch2').bootstrapSwitch( 'onText', "Yes" );
    $( '#bootstrapswitch2').bootstrapSwitch( 'state', true );
    $( '#bootstrapswitch2').bootstrapSwitch( 'offText', "No" );
    */
    /*
    $( '#bootstrapswitch1').on( 'switchChange.bootstrapSwitch', function( event, state ){
        if ( $( '#bootstrapswitch1').bootstrapSwitch( 'state') ) {
            $( '#EventHValidated' ).val( 1 );
        }
        else{
            $( '#EventHValidated' ).val( 0 );
        }
    })
    */
    /*
    $( '#bootstrapswitch2').on( 'switchChange.bootstrapSwitch', function( event, state ){
        if ( $( '#bootstrapswitch2').bootstrapSwitch( 'state') ) {
            $( '#CustomerHActive' ).val( 1 );
        }
        else{
            $( '#CustomerHActive' ).val( 0 );
        }
    })

    $('#datetimepicker1').on('dp.change', function(e){
        var dateArr = $( '#datetimepicker1' ).data().date.split("/");
        $( '#EventHDate' ).val( dateArr[2] + "-" + dateArr[1] + "-" + dateArr[0] );
    });
    /*
    $('#datetimepicker2').on('dp.change', function(e){
        var dateArr = $( '#datetimepicker2' ).data().date.split("/");
        $( '#EventHDateE' ).val( dateArr[2] + "-" + dateArr[1] + "-" + dateArr[0] );
    });
    */
    /*
    $("input[name='touchspin1']").on('change', function(e){
        var d = $(this).val();
        var easyH = Math.floor(d/60);
        var easyM = '00';
        
        if ( (d % 60) === 0 ) {
            easyM = '00';
        }
        else{
            easyM = (d % 60);
        }
        
        $('#EventHDuration').val( d );
        $('#EventEasyDuration').val( easyH + ' H ' +  easyM + ' MIN');
    });
    /*
    $("input[name='touchspin2']").on('change', function(e){
        var d = $(this).val();
        var easyH = Math.floor(d/60);
        var easyM = '00';
        
        if ( (d % 60) === 0 ) {
            easyM = '00';
        }
        else{
            easyM = (d % 60);
        }
        
        $('#EventHDurationE').val( d );
        $('#EventEasyDurationRec').val( easyH + ' H ' +  easyM + ' MIN');
    });
    */
    //$('#EventEasyDurationRec').val( Math.floor($('#EventHDurationE').val()/60) + ' H ' +  ($('#EventHDurationE').val() % 60) + ' MIN' );


/**
* Users Part starts Here!
* 
*/



/**
* Groups Part starts Here!
* 
*/




/**
* Customers Part starts Here!
* 
*/
});