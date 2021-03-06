<?php
namespace Avalara;
use GuzzleHttp\Client;

/*****************************************************************************
 *                                                                           *
 *      This file is automatically generated by the AvaTax SDK process.      *
 *                  Edits to this file will be overwritten.                  *
 *                                                                           *
 *****************************************************************************/
 
/*****************************************************************************
 *                              Enumerated constants                         *
 *****************************************************************************/

 /**
 * Lists of acceptable values for the enumerated data type TransactionAddressType
 */
class TransactionAddressType
{
    const C_SHIPFROM = "ShipFrom";
    const C_SHIPTO = "ShipTo";
    const C_POINTOFORDERACCEPTANCE = "PointOfOrderAcceptance";
    const C_POINTOFORDERORIGIN = "PointOfOrderOrigin";
    const C_SINGLELOCATION = "SingleLocation";
}

@foreach(var i in SwaggerModel.Enums) {
<text>
/**
 * @PhpComment(i.Summary, 1)
 */
class @i.Name
{</text>
    foreach (var v in i.Values) {
        if (!String.IsNullOrEmpty(v.Summary)) {
            WriteLine("");
            WriteLine("    /**");
            WriteLine("     * " + PhpComment(v.Summary, 5));
            WriteLine("     */");
        }
        WriteLine("    const C_" + v.Name.ToUpper() + " = " + v.Value + ";");
    }
<text>
}
</text>
}
?>