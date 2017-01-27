<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */
require_once('../class/formulario.php');
require_once('../class/novedad.php');
require_once('../class/persona.php');
require_once('../class/enfermedad.php');
/** Error reporting */
//error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('America/Bogota');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/../class/phpexcel/Classes/PHPExcel.php';


$objFormulario = new ClassFormulario();
$objNovedad = new ClassNovedad();
$objPersona = new ClassPersona();
$objEnfermedad = new ClassEnfermedad();

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

$activeSheet = $objPHPExcel->setActiveSheetIndex(0);

/*tamaño de columna*/

$activeSheet->getColumnDimension('A')->setWidth(1);
$activeSheet->getColumnDimension('B')->setWidth(3);
$activeSheet->getColumnDimension('C')->setWidth(3);
$activeSheet->getColumnDimension('D')->setWidth(3);
$activeSheet->getColumnDimension('E')->setWidth(3);
$activeSheet->getColumnDimension('F')->setWidth(3);
$activeSheet->getColumnDimension('G')->setWidth(3);
$activeSheet->getColumnDimension('H')->setWidth(3);
$activeSheet->getColumnDimension('I')->setWidth(3);
$activeSheet->getColumnDimension('J')->setWidth(3);
$activeSheet->getColumnDimension('K')->setWidth(3);
$activeSheet->getColumnDimension('L')->setWidth(6);
$activeSheet->getColumnDimension('M')->setWidth(15);
$activeSheet->getColumnDimension('N')->setWidth(3);
$activeSheet->getColumnDimension('O')->setWidth(3);
$activeSheet->getColumnDimension('P')->setWidth(3);
$activeSheet->getColumnDimension('Q')->setWidth(6);
$activeSheet->getColumnDimension('R')->setWidth(4);
$activeSheet->getColumnDimension('S')->setWidth(3);
$activeSheet->getColumnDimension('T')->setWidth(3);
$activeSheet->getColumnDimension('U')->setWidth(3);
$activeSheet->getColumnDimension('V')->setWidth(3);
$activeSheet->getColumnDimension('W')->setWidth(3);
$activeSheet->getColumnDimension('X')->setWidth(3);
$activeSheet->getColumnDimension('Y')->setWidth(3);
$activeSheet->getColumnDimension('Z')->setWidth(3.5);
$activeSheet->getColumnDimension('AA')->setWidth(3.5);
$activeSheet->getColumnDimension('AB')->setWidth(3.5);
$activeSheet->getColumnDimension('AC')->setWidth(3);
$activeSheet->getColumnDimension('AD')->setWidth(4);
$activeSheet->getColumnDimension('AE')->setWidth(3);
$activeSheet->getColumnDimension('AF')->setWidth(4);
$activeSheet->getColumnDimension('AG')->setWidth(4);
$activeSheet->getColumnDimension('AH')->setWidth(2);
$activeSheet->getColumnDimension('AI')->setWidth(3);
$activeSheet->getRowDimension('42')->setRowHeight(95);
$activeSheet->getRowDimension('47')->setRowHeight(25);
$activeSheet->getRowDimension('38')->setRowHeight(20);
$activeSheet->getRowDimension('39')->setRowHeight(20);
$activeSheet->getRowDimension('40')->setRowHeight(20);

/*Combinando Celdas*/
$activeSheet->mergeCells('B4:I4');
$activeSheet->mergeCells('B5:C5');
$activeSheet->mergeCells('D5:E5');
$activeSheet->mergeCells('F5:I5');
//$activeSheet->mergeCells('J4:J5');
$activeSheet->mergeCells('K4:N5');
$activeSheet->mergeCells('K6:N6');
//$activeSheet->mergeCells('O4:O5');
$activeSheet->mergeCells('P4:Y5');
$activeSheet->mergeCells('P6:Y6');
$activeSheet->mergeCells('Z6:AH6');
$activeSheet->mergeCells('B8:Y8');
$activeSheet->mergeCells('Z8:AH8');
$activeSheet->mergeCells('B11:J11');
$activeSheet->mergeCells('K11:M11');
$activeSheet->mergeCells('N11:R11');
$activeSheet->mergeCells('S11:Y11');
$activeSheet->mergeCells('Z10:AA10');
$activeSheet->mergeCells('AB10:AC10');
$activeSheet->mergeCells('AD10:AH10');
$activeSheet->mergeCells('Z11:AA11');
$activeSheet->mergeCells('AB11:AC11');
$activeSheet->mergeCells('AD11:AH11');
$activeSheet->mergeCells('Z12:AH12');
$activeSheet->mergeCells('B13:J13');
$activeSheet->mergeCells('K13:M13');
$activeSheet->mergeCells('N13:R13');
$activeSheet->mergeCells('S13:Y13');
$activeSheet->mergeCells('Z13:AH13');
$activeSheet->mergeCells('Z14:AH14');
$activeSheet->mergeCells('F15:G15');
$activeSheet->mergeCells('I15:J15');
$activeSheet->mergeCells('L15:S15');
$activeSheet->mergeCells('T15:Y15');
$activeSheet->mergeCells('Z15:AH15');
$activeSheet->mergeCells('B16:AH16');
$activeSheet->mergeCells('B17:F17');
$activeSheet->mergeCells('G17:L17');
$activeSheet->mergeCells('M17:Q17');
$activeSheet->mergeCells('R17:X17');
$activeSheet->mergeCells('Y17:AB17');
$activeSheet->mergeCells('AC17:AH17');
$activeSheet->mergeCells('B18:F18');
$activeSheet->mergeCells('G18:L18');
$activeSheet->mergeCells('M18:Q18');
$activeSheet->mergeCells('R18:X18');
$activeSheet->mergeCells('Y18:AB18');
$activeSheet->mergeCells('AC18:AH18');
$activeSheet->mergeCells('B19:F19');
$activeSheet->mergeCells('G19:L19');
$activeSheet->mergeCells('M19:Q19');
$activeSheet->mergeCells('R19:X19');
$activeSheet->mergeCells('Y19:AB19');
$activeSheet->mergeCells('AC19:AH19');
$activeSheet->mergeCells('B20:F20');
$activeSheet->mergeCells('G20:L20');
$activeSheet->mergeCells('M20:Q20');
$activeSheet->mergeCells('R20:X20');
$activeSheet->mergeCells('Y20:AB20');
$activeSheet->mergeCells('AC20:AH20');
$activeSheet->mergeCells('B21:F21');
$activeSheet->mergeCells('G21:L21');
$activeSheet->mergeCells('M21:Q21');
$activeSheet->mergeCells('R21:X21');
$activeSheet->mergeCells('Y21:AB21');
$activeSheet->mergeCells('AC21:AH21');
$activeSheet->mergeCells('B38:AH40');
$activeSheet->mergeCells('B43:X45');
$activeSheet->mergeCells('Z41:AG41');
$activeSheet->mergeCells('B42:X42');
$activeSheet->mergeCells('AD42:AG42');
$activeSheet->mergeCells('AA44:AD44');
$activeSheet->mergeCells('B47:AH47');

/*Formatos*/
$objPHPExcel->getActiveSheet()->getStyle('B42:X42')
->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->getStyle('B43:X45')
->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->getStyle('B47:AH47')
->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->getStyle('B38:AH40')
->getAlignment()->setWrapText(true);



$styleTextMini = array(
    'font'  => array(
        'bold'  => false,
        //'color' => array('rgb' => 'fff'),
        'size'  => 6,
        'name'  => 'Calibri'
    ));

$styleTituloAzul = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '1F4E78'),
        'size'  => 10,
        'name'  => 'Calibri'
    ));

$styleTituloAzulLittle = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '1F4E78'),
        'size'  => 6,
        'name'  => 'Calibri'
    ));

$styleTituloAzulHuella = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '1F4E78'),
        'size'  => 7,
        'name'  => 'Calibri'
    ));

$styleTituloAzulTabla = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'FFFFFF'),
        'size'  => 11,
        'name'  => 'Calibri'
    ));

$styleTituloAzulTabla2 = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '#324A7C'),
        'size'  => 11,
        'name'  => 'Calibri'
    ));

$styleTituloAzulTabla3 = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '#324A7C'),
        'size'  => 9,
        'name'  => 'Calibri'
    ));

$styleTituloTabla = array(
    'font'  => array(
        'bold'  => false,
        //'color' => array('rgb' => '000066'),
        'size'  => 8,
        'name'  => 'Calibri'
    ));

$styleTextData = array(
    'font'  => array(
        'bold'  => false,
        //'color' => array('rgb' => '000066'),
        'size'  => 10,
        'name'  => 'Calibri'
    ));

$styleTituloTablaCenter = array(
    'font'  => array(
        'bold'  => false,
        //'color' => array('rgb' => '000066'),
        'size'  => 8,
        'name'  => 'Calibri',
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    ));


$objPHPExcel->getActiveSheet()->getStyle('B2:AI48')->applyFromArray($styleTituloTabla);


$objPHPExcel->getActiveSheet()->getStyle('B16:AH16')->applyFromArray($styleTituloAzulTabla);
$objPHPExcel->getActiveSheet()->getStyle('B16:AH16')->applyFromArray(
    array(
      'color' => array('rgb' => 'FFFFFF'),
        'size'  => 7,
        'name'  => 'Calibri',
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '1F4E78')
        )
    )
);
$objPHPExcel->getActiveSheet()->getStyle('Z4:AH6')->applyFromArray(
    array(
      'color' => array('rgb' => 'FFFFFF'),
        'size'  => 7,
        'name'  => 'Calibri',
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'D9D9D9')
        )
    )
);

$objPHPExcel->getActiveSheet()->getStyle('B17:AH17')->applyFromArray($styleTituloAzulTabla2);
$objPHPExcel->getActiveSheet()->getStyle('R17')->applyFromArray($styleTituloAzulTabla3);
$objPHPExcel->getActiveSheet()->getStyle('B17:AH17')->applyFromArray(
    array(
      'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'D9D9D9')
      )
    )
);

$objPHPExcel->getActiveSheet()->getStyle('B3')->applyFromArray($styleTextMini);

$objPHPExcel->getActiveSheet()->getStyle('B36')->applyFromArray($styleTextMini);
$objPHPExcel->getActiveSheet()->getStyle('B38')->applyFromArray($styleTextMini);
$objPHPExcel->getActiveSheet()->getStyle('B42:B43')->applyFromArray($styleTextMini);
$objPHPExcel->getActiveSheet()->getStyle('B47')->applyFromArray($styleTextMini);


$objPHPExcel->getActiveSheet()->getStyle('B37')->applyFromArray($styleTituloAzul);
$objPHPExcel->getActiveSheet()->getStyle('B41')->applyFromArray($styleTituloAzul);


$objPHPExcel->getActiveSheet()->getStyle('B46')->applyFromArray($styleTituloAzulLittle);


$objPHPExcel->getActiveSheet()->getStyle('Z41')->applyFromArray($styleTituloAzulHuella);


$objPHPExcel->getActiveSheet()->getStyle('B6:I6')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('Z6')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('B8:AH8')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('B11:AH11')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('B13:AH13')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('F15')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('I15')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('L15:AH15')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('D26:D29')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('K26:K29')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('O26:O29')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('U26:O30')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('Z28')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('AC26:AC29')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('AF28')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('B33:R33')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('B35:R35')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('J5:J6')->applyFromArray($styleTextData);
$objPHPExcel->getActiveSheet()->getStyle('O5:O6')->applyFromArray($styleTextData);

/*Alineacion*/
$objPHPExcel->getActiveSheet()->getStyle('B4:I6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('Z6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B8')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('Z8')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('Z10:AH10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B11:AH11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B13:AH13')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('L15:AH15')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('D14:D15')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B16:AH21')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


/*Color*/

$objPHPExcel->getActiveSheet()->getStyle('B16:AH16')->getFill()->getStartColor()->getRGB('1F4E78');
/*$activeSheet->getStyle('B42:X42')
->getAlignment()->setWrapText(true);*/

/*Bordes*/

$styleArray = array(
      'borders' => array(
          'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_THIN
          )
      )
  );
$objPHPExcel->getActiveSheet()->getStyle('B4:AH4')->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B4:B47')->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B47:AH47')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('AH4:AH47')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B4:I4')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('J5:J6')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('O5:O6')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('T9')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('V9')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('Y9')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('Z10:AH11')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('D14:D15')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('B16:AH21')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('C26:C29')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('J26:J29')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('N26:N29')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('T26')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('T28:T29')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('Y28')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('AB26')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('AB28:AB29')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('Z41:AG41')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('AD42:AG42')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('B24')->applyFromArray($styleArray);

$objPHPExcel->getActiveSheet()->getStyle('B5:C6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('D5:E6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('F5:I6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('C6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('D6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('E6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('F6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('G6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('H6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('H6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B6:I6')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('J5:Y5')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('J6:AH6')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Z4:Z6')->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B6:AH6')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Y7:Y6')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B11:AH11')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B8:AH8')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('J9:J11')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Y7:Y8')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('M9:M11')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('R9:R11')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Y9:Y11')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Z9:AH9')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B13:AH13')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('J12:J13')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('M12:M13')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('R12:R13')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Y12:Y13')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Z12:AH12')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('E14:E15')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('H14:H15')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('K14:K15')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('S14:S15')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Y14:Y15')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Z14:AH14')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B32:V32')->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B33:V33')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('B35:V35')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('K32:K35')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('O32:O35')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('V32:V35')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Z42:Z45')->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Z45:AG45')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('AG42:AG45')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel->getActiveSheet()->getStyle('Z44:AE44')->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

/*Imagenes*/
$allianz = imagecreatefrompng('../images/allianz_excel.png');
$logo = imagecreatefrompng('../images/logo_excel.png');
$sekuritas = imagecreatefrompng('../images/sekuritas_excel.png'); 

$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
$objDrawing->setName('Allianz Logo'); 
$objDrawing->setDescription('Allianz Logo');
$objDrawing->setImageResource($allianz);
$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
$objDrawing->setHeight(35);
$objDrawing->setCoordinates('B1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
$objDrawing->setName('Logo'); 
$objDrawing->setDescription('Logo');
$objDrawing->setImageResource($logo);
$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
$objDrawing->setHeight(40);
$objDrawing->setCoordinates('N1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
$objDrawing->setName('Sekuritas'); 
$objDrawing->setDescription('Sekuritas');
$objDrawing->setImageResource($sekuritas);
$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
$objDrawing->setHeight(45);
$objDrawing->setCoordinates('Z1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());


// Agregando texto de los titulos
$activeSheet->setCellValue('B3', 'Le recordamos la importancia de declarar el verdadero estado de salud al momento de diligenciar la solicitud de seguro. Favor leer con detenimiento la declaración de asegurabilidad contenida en el presente documento.')
			->setCellValue('B4', 'Fecha de diligenciamiento')
            ->setCellValue('B5', 'D')
            ->setCellValue('D5', 'M')
            ->setCellValue('F5', 'A')
            ->setCellValue('Z4', 'Póliza No.')
            ->setCellValue('K4', 'Ingreso')
            ->setCellValue('P4', 'Asegurado principal')
            ->setCellValue('K6', 'Incremento de valor asegurado')
            ->setCellValue('P6', 'Familiar asegurado principal')
            ->setCellValue('B7', 'Razón Social de la Entidad Tomadora')
            ->setCellValue('Z7', 'C.C o Nit')
            ->setCellValue('B9', 'Nombre Solicitante del Seguro')
            ->setCellValue('K9', 'Primer Apellido')
            ->setCellValue('N9', 'Segundo Apellido')
            ->setCellValue('S9', 'CC')
            ->setCellValue('U9', 'CE')
            ->setCellValue('W9', 'NUIP')
            ->setCellValue('Z9', 'Fecha de Nacimiento')
            ->setCellValue('S10', 'No. De Documento')
            ->setCellValue('Z10', 'D')
            ->setCellValue('AB10', 'M')
            ->setCellValue('AD10', 'A')
            ->setCellValue('B12', 'Dirección Particular')
            ->setCellValue('K12', 'Teléfono')
            ->setCellValue('N12', 'Ciudad')
            ->setCellValue('S12', 'Valor Asegurado Actual')
            ->setCellValue('Z12', 'Solicitud de Incremento de valor asegurado')
            ->setCellValue('B14', 'Sexo')
            ->setCellValue('E14', 'M')
            ->setCellValue('E15', 'F')
            ->setCellValue('F14', 'Estatura')
            ->setCellValue('I14', 'Peso')
            ->setCellValue('L14', 'Ocupación actual detallada')
            ->setCellValue('T14', 'Centro de costo')
            ->setCellValue('Z14', 'Deportes que practica')
            ->setCellValue('H15', 'Mts')
            ->setCellValue('K15', 'Kgs')
            ->setCellValue('B16', 'CUADRO DE BENEFICIARIOS')
            ->setCellValue('B17', 'PRIMER APELLIDO')
            ->setCellValue('G17', 'SEGUNDO APELLIDO')
            ->setCellValue('M17', 'NOMBRES')
            ->setCellValue('R17', 'No. Documento Identidad')
            ->setCellValue('Y17', '% Participación')
            ->setCellValue('AC17', 'Parentesco')
            ->setCellValue('B22', 'Marque X')
            ->setCellValue('B23', 'Yo, el abajo firmante, declaro que:')
            ->setCellValue('C24', 'En la fecha me encuentro en buen estado de salud y mi habilidad no se encuentra de alguna manera reducida.')
            ->setCellValue('B25', 'Padezco o he padecido las lesiones o enfermedades que a continuación marco con x:')
            ->setCellValue('D26', 'Mentales - psiquiátricas')
            ->setCellValue('K26', 'Gastrointestinales')
            ->setCellValue('O26', 'Drogadicción')
            ->setCellValue('U26', 'Tabaquismo')
            ->setCellValue('AC26', 'Alcoholismo')
            ->setCellValue('D27', 'Cardiovasculares')
            ->setCellValue('K27', 'Cerebrovasculares')
            ->setCellValue('O27', 'Hipertensión Arterial')
            ->setCellValue('U27', 'Cigarrillos Diarios')
            ->setCellValue('AC27', 'Tragos Semanales')
            ->setCellValue('D28', 'Pulmonares')
            ->setCellValue('K28', 'Artritis')
            ->setCellValue('O28', 'Cáncer')
            ->setCellValue('U28', '5 o menos')
            ->setCellValue('Z28', '21 o mas')
            ->setCellValue('AC28', '5 o menos')
            ->setCellValue('AF28', '21 o mas')
            ->setCellValue('D29', 'Renales')
            ->setCellValue('K29', 'Sida')
            ->setCellValue('O29', 'Diabetes')
            ->setCellValue('U29', '6 a 20')
            ->setCellValue('AC29', '6 a 20')
            ->setCellValue('U30', 'Otra enfermedad Cual?')
            ->setCellValue('AB30', '_________________________')
            ->setCellValue('B31', 'En caso de haber padecido alguna enfermedad de las mencionadas anteriormente explique:')
            ->setCellValue('B32', 'Enfermedad')
            ->setCellValue('L32', 'Año diagnostico')
            ->setCellValue('P32', 'Tratamiento')
            ->setCellValue('B34', 'Enfermedad')
            ->setCellValue('L34', 'Año diagnostico')
            ->setCellValue('P34', 'Tratamiento')
            ->setCellValue('B36', '*En caso de no haber marcado ninguna de las enfermedades entonces se entenderá que me encuentro en buen estado de salud.')
            ->setCellValue('B37', 'DECLARACION DE AUTORIZACION')
            ->setCellValue('B38', 'Declaro que he leído, entiendo y acepto la información contenida en la presente solicitud individual de seguro, que tengo conocimiento que la póliza se otorgará en consideración a la veracidad de estas declaraciones; y que en el evento de no coincidir ellas  estrictamente con la realidad, el seguro otorgado quedará viciado de nulidad en los términos del artículo 1058 del código de comercio. Autorizo a la aseguradora para que use, consulte y/o reporte a las centrales de información de riesgos , cualquier información relativa a mis hábitos de pago, al cumplimiento que se he dado a mis obligaciones y mi información comercial disponible. Sin perjuicio de lo estipulado por el artículo 34 de la ley 23  de 1981, autorizo a la aseguradora para acceder a mis historias clínicas y demás documentos sobre mi estado de salud, y a los médicos y entidades hospitalarias para que suministren a dicha aseguradora tales documentos, aun después de mi fallecimiento.  Declaro que desarrollo en forma normal mis actividades, que mi profesión u oficio son lícitos y que no tengo ni he tenido amenaza de secuestro o en contra de mi integridad personal en los últimos tres (3) años. declaro que conozco y acepto las condiciones particulares y generales de la póliza de vida grupo a que accede  esta solicitud.')
            ->setCellValue('B41', 'TRATAMIENTO DE DATOS PERSONALES')
            ->setCellValue('Z41', 'Firma y Huella Solicitante del seguro')
            ->setCellValue('B42', 'Autorizo de manera expresa a Allianz Seguros de vida S.A. y las Compañías del Grupo Allianz para tratar mis datos personales, es decir, realizar operaciones sobre los mismos, como recolección, almacenamiento, uso, reporte, circulación o transferencia. Así mismo, las autorizo para que permitan su tratamiento a: Quiénes sean sus representantes o con quienes celebre contratos de transmisión de datos; Intermediarios, reaseguradores, coaseguradores, FASECOLDA, y sus filiales, operadores y prestadores necesarios para el cumplimiento de los contratos; Encargados dentro y fuera del territorio nacional. Autorizo el tratamiento de mis datos sensibles, en especial, los relativos a la salud y biométricos y entiendo que las preguntas que me hagan sobre estos datos o los de niños (as) y adolecentes, tienen carácter facultativo. Declaro que conozco los fines para los cuales serán tratados mis datos o los de la persona que represento así: (i) Atención de solicitudes, gestión del seguro y de contratos con las compañías; (ii)Control y prevención del fraude; (iii) Oferta de productos o servicios de las compañías o terceros vinculados, encuestas y otros fines comerciales, financieros o publicitarios a través de mensajes de texto, correo electrónico, SMS, entre otros; (iv) Fines estadísticos, de consulta, gremiales y técnicos, así como para fines tributarios, incluidas las autoridades de otros países. Como titular de la información, conozco que me asisten los derechos previstos en la ley, en especial, conocer, actualizar y solicitar la supresión de mis datos. Los responsables del tratamiento son las compañías de Grupo Allianz, ubicadas en la carrera 13A No. 29-24, piso 16 de Bogotá: teléfono en Bogotá 6065903 y a nivel nacional: 018000514405 - opción 2.')
            ->setCellValue('B43', 'DECLARACION: Todos los datos aquí consignados son ciertos, la información que adjunto es veraz y verificable y autorizo su verificación ante cualquier persona, sin limitación alguna, y me obligo a actualizar o confirmar la información una vez al año o cada vez que un producto o servicio lo amerite. Autorizo irrevocablemente durante la vigencia del contrato del seguro que llegare a celebrar con Allianz Seguros de Vida S.A. y por diez años mas después de finalizada la vigencia del mismo a los médicos, clínicas, hospitales, EPS y demás establecimientos que me hayan brindado atención en servicio de salud, para suministrar la información sobre mi historia clínica y/o estado de salud que Allianz Seguros de Vida S.A. les solicite, aun después de mi fallecimiento.')
            ->setCellValue('Z44', 'C.C.')
            ->setCellValue('B46', 'En constancia de comprensión y conformidad con lo anterior, firma')
            ->setCellValue('B47', 'El diligenciamiento y suscripción de la presente solicitud  individual de seguro no compromete de ningún modo a la Aseguradora, ni implica obligación alguna de otorgar el Seguro de Vida al que accede. La Aseguradora se reserva el derecho de otorgar la cobertura una vez evaluada y verificada la información aquí consignada por el solicitante del seguro. ')
            ;




/* Volcando la información */

$formulario       = $objFormulario->findForm($_REQUEST['id']);
$novedad          = $objNovedad->findByIdForm($_REQUEST['id']);
$beneficiarios    = $objPersona->findBeneficiariesByForm($_REQUEST['id']);
$enfermedad       = $objEnfermedad->findNovedadByForm($_REQUEST['id']);
$tratamiento      = $objEnfermedad->findTratamientoByForm($_REQUEST['id']);

$fecha = $formulario[0]['fech_creacion'];
$fecha = explode(' ', $fecha);
$fecha = explode('-', $fecha[0]);
/*var_dump($fecha[0]);
var_dump($formulario);
*/
$activeSheet->setCellValue('B6', substr($fecha[2], 0,1));
$activeSheet->setCellValue('C6', substr($fecha[2], 1,1));
$activeSheet->setCellValue('D6', substr($fecha[1], 0,1));
$activeSheet->setCellValue('E6', substr($fecha[1], 1,1));
$activeSheet->setCellValue('F6', substr($fecha[0], 0,1));
$activeSheet->setCellValue('G6', substr($fecha[0], 1,1));
$activeSheet->setCellValue('H6', substr($fecha[0], 2,1));
$activeSheet->setCellValue('I6', substr($fecha[0], 3,1));
$activeSheet->setCellValue('Z6', $formulario[0]['pol_form']);
$activeSheet->setCellValue('B8', $formulario[0]['nom_emp']);
$activeSheet->setCellValue('Z8', $formulario[0]['nit_emp']);

switch ($formulario[0]['id_tip_doc']) {
      case 'cc':
            $activeSheet->setCellValue('T9', 'X');
            break;

      case 'nuip':
            $activeSheet->setCellValue('Y9', 'X');
            break;

      case 'ce':
            $activeSheet->setCellValue('V9', 'X');
            break;
      
      default:
            # code...
            break;
}

$activeSheet->setCellValue('B11', $formulario[0]['prim_nom_per']);
$activeSheet->setCellValue('K11', $formulario[0]['prim_ape_per']);
$activeSheet->setCellValue('N11', $formulario[0]['seg_ape_per']);
$activeSheet->setCellValue('S11', $formulario[0]['doc_per']);
$activeSheet->setCellValue('Z11', (string)( strlen($formulario[0]['dia_nac_per']) ==1 )? '0'.$formulario[0]['dia_nac_per']: $formulario[0]['dia_nac_per']);
$activeSheet->setCellValue('AB11', (string)( strlen($formulario[0]['mes_nac_per']) ==1 )? '0'.$formulario[0]['mes_nac_per']: $formulario[0]['mes_nac_per']);
$activeSheet->setCellValue('AD11', (string)$formulario[0]['anio_nac_per']);
$activeSheet->setCellValue('B13', $formulario[0]['dir_per']);
$activeSheet->setCellValue('K13', $formulario[0]['tel_per']);
$activeSheet->setCellValue('N13', $formulario[0]['nom_ciu']);
$activeSheet->setCellValue('Z13', $formulario[0]['solic_increm_form']);

switch ($formulario[0]['gen_per']) {
      case 'm':
            $activeSheet->setCellValue('D14', 'X');
            break;

      case 'f':
            $activeSheet->setCellValue('D15', 'X');
            break;
      default:
            # code...
            break;
}
$activeSheet->setCellValue('F15', $formulario[0]['est_per']);
$activeSheet->setCellValue('I15', $formulario[0]['pes_per']);
$activeSheet->setCellValue('L15', $formulario[0]['ocupacion']);
$activeSheet->setCellValue('Z15', $formulario[0]['desc_dep']);

for ($i=0; $i < count($novedad) ; $i++) { 
      switch ($novedad[$i]['id_nov']) {
            case '1':
                  $activeSheet->setCellValue('J5', 'X');
                  break;
            case '2':
                  $activeSheet->setCellValue('O5', 'X');
                  break;
            case '3':
                  $activeSheet->setCellValue('J6', 'X');
                  break;
            case '4':
                  $activeSheet->setCellValue('O6', 'X');
                  break;
            default:
                  # code...
                  break;
      }
}

$benInicial = 18;
for ($i=0; $i < count($beneficiarios); $i++) { 
      $activeSheet->setCellValue('B'.$benInicial, $beneficiarios[$i]['prim_ape_per']);
      $activeSheet->setCellValue('G'.$benInicial, $beneficiarios[$i]['seg_ape_per']);
      $activeSheet->setCellValue('M'.$benInicial, $beneficiarios[$i]['prim_nom_per']);
      $activeSheet->setCellValue('R'.$benInicial, $beneficiarios[$i]['doc_per']);
      $activeSheet->setCellValue('Y'.$benInicial, $beneficiarios[$i]['porcentaje']);
      $activeSheet->setCellValue('AC'.$benInicial, $beneficiarios[$i]['parentezco']);
      $benInicial++;
}

if(count($novedad)<=0)
{
      $activeSheet->setCellValue('B24', 'X');
}

for ($i=0; $i < count($novedad) ; $i++) { 
      switch ($novedad[$i]['id_nov']) {
            case '1':
                  $activeSheet->setCellValue('C26', 'X');
                  break;
            case '2':
                  $activeSheet->setCellValue('J26', 'X');
                  break;
            case '3':
                  $activeSheet->setCellValue('N26', 'X');
                  break;
            case '4':
                  $activeSheet->setCellValue('T26', 'X');
                  break;
            case '5':
                  $activeSheet->setCellValue('AB26', 'X');
                  break;
            case '6':
                  $activeSheet->setCellValue('C27', 'X');
                  break;
            case '7':
                  $activeSheet->setCellValue('J27', 'X');
                  break;
            case '8':
                  $activeSheet->setCellValue('N27', 'X');
                  break;
            case '9':
                  $activeSheet->setCellValue('T28', 'X');
                  break;
            case '10':
                  $activeSheet->setCellValue('AB28', 'X');
                  break;
            case '11':
                  $activeSheet->setCellValue('C28', 'X');
                  break;
            case '12':
                  $activeSheet->setCellValue('J28', 'X');
                  break;
            case '13':
                  $activeSheet->setCellValue('N28', 'X');
                  break;
            case '14':
                  $activeSheet->setCellValue('Y28', 'X');
                  break;
            case '15':
                  $activeSheet->setCellValue('AE28', 'X');
                  break;
            case '16':
                  $activeSheet->setCellValue('C29', 'X');
                  break;
            case '17':
                  $activeSheet->setCellValue('J29', 'X');
                  break;
            case '18':
                  $activeSheet->setCellValue('N29', 'X');
                  break;
            case '19':
                  $activeSheet->setCellValue('T29', 'X');
                  break;
            case '20':
                  $activeSheet->setCellValue('AB29', 'X');
                  break;
            
            default:
                  
                  break;
      }
}

$tratamientoLinea = 33;

for ($i=0; $i < count($tratamiento) ; $i++) { 
      $activeSheet->setCellValue('C'.$tratamientoLinea,$tratamiento[$i]['enfermedad']);
      $activeSheet->setCellValue('M'.$tratamientoLinea,$tratamiento[$i]['anio_diag']);
      $activeSheet->setCellValue('Q'.$tratamientoLinea,$tratamiento[$i]['tratamiento']);
      $tratamientoLinea++;
}

$activeSheet->setCellValue('AA44', $formulario[0]['doc_per']);
//die($_REQUEST['id']);

// Miscellaneous glyphs, UTF-8
/*$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');*/

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Vida');
$objPHPExcel->getActiveSheet()->setShowGridlines(false);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPrintArea('A1:AI48');
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(1);
$objPHPExcel->getActiveSheet()->getPageSetup()->setScale(100);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="01simple.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
