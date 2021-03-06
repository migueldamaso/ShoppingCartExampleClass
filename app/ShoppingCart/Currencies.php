<?php 

namespace ShoppingCart\ShoppingCart;

/**
 * All currency symbols available
 */
abstract class Currencies
{
    public const EURO = '€';
    public const DOLLAR = '$';
    public const AED = '&#1583;.&#1573;';
    public const AFN = '&#65;&#102;';
    public const ALL = '&#76;&#101;&#107;';
    public const AMD = '';
    public const ANG = '&#402;';
    public const AOA = '&#75;&#122;';
    public const ARS = '&#36;';
    public const AUD = '&#36;';
    public const AWG = '&#402;';
    public const AZN = '&#1084;&#1072;&#1085;';
    public const BAM = '&#75;&#77;';
    public const BBD = '&#36;';
    public const BDT = '&#2547;';
    public const BGN = '&#1083;&#1074;';
    public const BHD = '.&#1583;.&#1576;';
    public const BIF = '&#70;&#66;&#117;';
    public const BMD = '&#36;';
    public const BND = '&#36;';
    public const BOB = '&#36;&#98;';
    public const BRL = '&#82;&#36;';
    public const BSD = '&#36;';
    public const BTN = '&#78;&#117;&#46;';
    public const BWP = '&#80;';
    public const BYR = '&#112;&#46;';
    public const BZD = '&#66;&#90;&#36;';
    public const CAD = '&#36;';
    public const CDF = '&#70;&#67;';
    public const CHF = '&#67;&#72;&#70;';
    public const CLF = '';
    public const CLP = '&#36;';
    public const CNY = '&#165;';
    public const COP = '&#36;';
    public const CRC = '&#8353;';
    public const CUP = '&#8396;';
    public const CVE = '&#36;';
    public const CZK = '&#75;&#269;';
    public const DJF = '&#70;&#100;&#106;';
    public const DKK = '&#107;&#114;';
    public const DOP = '&#82;&#68;&#36;';
    public const DZD = '&#1583;&#1580;';
    public const EGP = '&#163;';
    public const ETB = '&#66;&#114;';
    public const EUR = '&#8364;';
    public const FJD = '&#36;';
    public const FKP = '&#163;';
    public const GBP = '&#163;';
    public const GEL = '&#4314;';
    public const GHS = '&#162;';
    public const GIP = '&#163;';
    public const GMD = '&#68;';
    public const GNF = '&#70;&#71;';
    public const GTQ = '&#81;';
    public const GYD = '&#36;';
    public const HKD = '&#36;';
    public const HNL = '&#76;';
    public const HRK = '&#107;&#110;';
    public const HTG = '&#71;';
    public const HUF = '&#70;&#116;';
    public const IDR = '&#82;&#112;';
    public const ILS = '&#8362;';
    public const INR = '&#8377;';
    public const IQD = '&#1593;.&#1583;';
    public const IRR = '&#65020;';
    public const ISK = '&#107;&#114;';
    public const JEP = '&#163;';
    public const JMD = '&#74;&#36;';
    public const JOD = '&#74;&#68;';
    public const JPY = '&#165;';
    public const KES = '&#75;&#83;&#104;';
    public const KGS = '&#1083;&#1074;';
    public const KHR = '&#6107;';
    public const KMF = '&#67;&#70;';
    public const KPW = '&#8361;';
    public const KRW = '&#8361;';
    public const KWD = '&#1583;.&#1603;';
    public const KYD = '&#36;';
    public const KZT = '&#1083;&#1074;';
    public const LAK = '&#8365;';
    public const LBP = '&#163;';
    public const LKR = '&#8360;';
    public const LRD = '&#36;';
    public const LSL = '&#76;';
    public const LTL = '&#76;&#116;';
    public const LVL = '&#76;&#115;';
    public const LYD = '&#1604;.&#1583;';
    public const MAD = '&#1583;.&#1605;.';
    public const MDL = '&#76;';
    public const MGA = '&#65;&#114;';
    public const MKD = '&#1076;&#1077;&#1085;';
    public const MMK = '&#75;';
    public const MNT = '&#8366;';
    public const MOP = '&#77;&#79;&#80;&#36;';
    public const MRO = '&#85;&#77;';
    public const MUR = '&#8360;';
    public const MVR = '.&#1923;';
    public const MWK = '&#77;&#75;';
    public const MXN = '&#36;';
    public const MYR = '&#82;&#77;';
    public const MZN = '&#77;&#84;';
    public const NAD = '&#36;';
    public const NGN = '&#8358;';
    public const NIO = '&#67;&#36;';
    public const NOK = '&#107;&#114;';
    public const NPR = '&#8360;';
    public const NZD = '&#36;';
    public const OMR = '&#65020;';
    public const PAB = '&#66;&#47;&#46;';
    public const PEN = '&#83;&#47;&#46;';
    public const PGK = '&#75;';
    public const PHP = '&#8369;';
    public const PKR = '&#8360;';
    public const PLN = '&#122;&#322;';
    public const PYG = '&#71;&#115;';
    public const QAR = '&#65020;';
    public const RON = '&#108;&#101;&#105;';
    public const RSD = '&#1044;&#1080;&#1085;&#46;';
    public const RUB = '&#1088;&#1091;&#1073;';
    public const RWF = '&#1585;.&#1587;';
    public const SAR = '&#65020;';
    public const SBD = '&#36;';
    public const SCR = '&#8360;';
    public const SDG = '&#163;';
    public const SEK = '&#107;&#114;';
    public const SGD = '&#36;';
    public const SHP = '&#163;';
    public const SLL = '&#76;&#101;';
    public const SOS = '&#83;';
    public const SRD = '&#36;';
    public const STD = '&#68;&#98;';
    public const SVC = '&#36;';
    public const SYP = '&#163;';
    public const SZL = '&#76;';
    public const THB = '&#3647;';
    public const TJS = '&#84;&#74;&#83;';
    public const TMT = '&#109;';
    public const TND = '&#1583;.&#1578;';
    public const TOP = '&#84;&#36;';
    public const TRY = '&#8356;';
    public const TTD = '&#36;';
    public const TWD = '&#78;&#84;&#36;';
    public const TZS = '';
    public const UAH = '&#8372;';
    public const UGX = '&#85;&#83;&#104;';
    public const USD = '&#36;';
    public const UYU = '&#36;&#85;';
    public const UZS = '&#1083;&#1074;';
    public const VEF = '&#66;&#115;';
    public const VND = '&#8363;';
    public const VUV = '&#86;&#84;';
    public const WST = '&#87;&#83;&#36;';
    public const XAF = '&#70;&#67;&#70;&#65;';
    public const XCD = '&#36;';
    public const XDR = '';
    public const XOF = '';
    public const XPF = '&#70;';
    public const YER = '&#65020;';
    public const ZAR = '&#82;';
    public const ZMK = '&#90;&#75;';
    public const ZWL = '&#90;&#36;';
}
