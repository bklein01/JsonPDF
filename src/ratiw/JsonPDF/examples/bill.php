<?php
// use these require statements if you point your http server directly to this folder.
require "../Fpdf.php";
require "../JsonPDF.php";

// use this require statement instead if you install JsonPDF via composer
// and comment out the above require statements.
//require 'vendor/autoload.php';

    $document = array(
        'header' => array(
            array(
                'type' => 'image',
                'url'  => 'img/rbb_logo.png',
                'x' => 10,
                'y' => 5,
                'width' => 20,
                // 'render-as' => 'form|data|(both)',
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{report_name}',
                'font' => 'THSarabun',
                'font-style' => 'B',
                'font-size'  => 24,
                'y' => 13,
                'align'  => 'R',
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'M U I  Rubber Belt Co., Ltd.',
                'font' => 'THSarabun',
                'font-style' => 'b',
                'font-size'  => 20,
                'x' => 33,
                'y' => 13,
                'width' => 80,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'บริษัท เอ็ม ยู ไอ รับเบอร์เบลท์ จำกัด',
                'font' => 'THSarabun',
                'font-size'  => 16,
                'x' => 33,
                'y' => 20,
                'width' => 80,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '51/231 หมู่ 2 ซ.งามวงศ์วาน 8 ถ.งามวงศ์วาน ต.บางเขน อ.เมือง จ.นนทบุรี 11000',
                'font' => 'THSarabun',
                'font-size' => 12,
                'x' => 10,
                'y' => 28,
                'width' => 80,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'Tel. 036-329546, 036-329559  Fax. 036-329xxx, 036-329XXX',
                'font' => 'THSarabun',
                'font-size' => 12,
                'x' => 10,
                'y' => 32,
                'width' => 80,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'เลขประจำตัวผู้เสียภาษี {tax_id} / {branch}',
                'font' => 'THSarabun',
                'font-size' => 12,
                'x' => 10,
                'y' => 38,
                'width' => 80,
                'render-as' => 'form',
            ),
            array(
                'type' => 'line',
                'x1' => 10, 'y1' => 24,
                'draw-color' => '100',  // gray scale
                'render-as' => 'form',
            ),
            array(
                'type' => 'rect',
                'x' => 10, 'y' => 42,
                'width' => 110,
                'height' => 40,
                'radius' => 2,
                'render-as' => 'form',
            ),
            array(
                'type' => 'rect',
                'x' => 122, 'y' => 42,
                'width' => 78,
                'height' => 40,
                'radius' => 2,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'รหัสลูกค้า',
                'font' => 'THSarabun',
                'font-size' => 12,
                'x' => 11,
                'y' => 46,
                // 'width' => 20,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{ar_code}',
                'font-size' => 12,
                'x' => 30,
                'y' => 46,
                // 'width' => 20,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => 'เลขประจำตัวผู้เสียภาษี',
                'font-size' => 12,
                'x' => 42,
                'y' => 46,
                // 'width' => 20,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{ar_tax_id} / {ar_branch}',
                'font-size' => 12,
                'x' => 70,
                'y' => 46,
                // 'width' => 20,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => 'นามลูกค้า',
                'font-size' => 12,
                'x' => 11,
                'y' => 52,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{ar_name}',
                'font-size' => 12,
                'x' => 30,
                'y' => 52,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => 'ที่อยู่',
                'font-size' => 12,
                'x' => 11,
                'y' => 58,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{ar_addr1}',
                'font-size' => 12,
                'x' => 30,
                'y' => 58,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => '{ar_addr2}',
                'font-size' => 12,
                'x' => 30,
                'y' => 64,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => 'เลขที่ใบสั่งซื้อ',
                'font-size' => 12,
                'x' => 11,
                'y' => 70,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{po_no}',
                'font-size' => 12,
                'x' => 30,
                'y' => 70,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => 'หมายเหตุ',
                'font-size' => 12,
                'x' => 11,
                'y' => 76,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{remark}',
                'font-size' => 12,
                'x' => 30,
                'y' => 76,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => 'วันที่',
                'font-size' => 12,
                'x' => 123,
                'y' => 46,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{doc_date}',
                'font-size' => 12,
                'x' => 150,
                'y' => 46,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => 'เลขที่ใบกำกับ',
                'font-size' => 12,
                'x' => 123,
                'y' => 52,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'พนักงานขาย',
                'font-size' => 12,
                'x' => 123,
                'y' => 58,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'การชำระเงิน',
                'font-size' => 12,
                'x' => 123,
                'y' => 64,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'วันที่ครบกำหนด',
                'font-size' => 12,
                'x' => 123,
                'y' => 70,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => 'จัดส่งโดย',
                'font-size' => 12,
                'x' => 123,
                'y' => 76,
                'render-as' => 'form',
            ),
            array(
                'type' => 'text',
                'text' => '{doc_no}',
                'font-size' => 12,
                'x' => 150,
                'y' => 52,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => '{sale_id}',
                'font-size' => 12,
                'x' => 150,
                'y' => 58,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => '{pay_terms}',
                'font-size' => 12,
                'x' => 150,
                'y' => 64,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => '{duedate}',
                'font-size' => 12,
                'x' => 150,
                'y' => 70,
                'render-as' => 'data',
            ),
            array(
                'type' => 'text',
                'text' => '{delivery}',
                'font-size' => 12,
                'x' => 150,
                'y' => 76,
                'render-as' => 'data',
            ),
            array(
                'type' => 'table-header',
                'render-as' => 'form',
                'y' => 85,
                'x' => 10,
                'table' => 'items_table',
                'font' => 'THSarabun',
                'font-size' => 20,
                'style' => array(
                    'title-row' => array(
                        'height' => 8,
                        // 'draw-text' => false,
                    )
                )
            ),
            // rect: baht_text
            array(
                'type' => 'rect',
                'x' => 10, 'y' => 177,
                'width' => 110,
                'height' => 10,
                'render-as' => 'form',
            ),
            // rect: total
            array(
                'type' => 'rect',
                'x' => 120, 'y' => 177,
                'width' => 50,
                'height' => 10,
                'render-as' => 'form',
            ),
            // rect: {total}
            array(
                'type' => 'rect',
                'x' => 170, 'y' => 177,
                'width' => 30,
                'height' => 10,
                'render-as' => 'form',
            ),
            // rect: vat
            array(
                'type' => 'rect',
                'x' => 120, 'y' => 187,
                'width' => 50,
                'height' => 10,
                'render-as' => 'form',
            ),
            // rect: {vat}
            array(
                'type' => 'rect',
                'x' => 170, 'y' => 187,
                'width' => 30,
                'height' => 10,
                'render-as' => 'form',
            ),
            // rect: net_total
            array(
                'type' => 'rect',
                'x' => 120, 'y' => 197,
                'width' => 50,
                'height' => 10,
                'render-as' => 'form',
            ),
            // rect: {net_total}
            array(
                'type' => 'rect',
                'x' => 170, 'y' => 197,
                'width' => 30,
                'height' => 10,
                'render-as' => 'form',
            ),

        ),
        'footer' => array(
            array(
                'type' => 'text',
                'y' => -15,
                'width' => 0,
                'height' => 10,
                'font' => 'Arial',
                'font-style' => 'I',
                'font-size'  => 8,
                'draw-color' => '0,0,0',
                'text' => 'Page {page}/{nb}',
                'border' => 'T',
                'align' => 'C',
                'render-as' => 'form',
            ),
        ),

        'body' => array(
            array(
                'type' => 'table-body',
                'table' => 'items_table',
                'font' => 'THSarabun',
                'font-size' => 20,
                // override default setting
                'style' => array(
                    // 'border' => 'LR',
                    'data-row' => array(
                        // 'height' => 10,
                        // 'text-color' => '0,0,0',
                        // 'fill-color' => '224,235,255',
                        // 'striped' => false,
                        // 'draw-text' => false,
                    )
                ),
            ),
        ),

        'tables' => array(
            'items_table' => array(
                'columns' => array(
                    array(
                        'name' => 'item_code',
                        'width' => 20,
                        'title' => 'Code',
                        'title-align' => 'L',
                        'data-align'  => 'L',
                    ),
                    array(
                        'name' => 'item_desc',
                        'width' => 70,
                        'title' => 'Description',
                        'data-align'  => 'L',
                    ),
                    array(
                        'name' => 'item_qty',
                        'width' => 20,
                        'title' => 'Qty.',
                        'title-align' => 'C',
                        'data-align'  => 'R',
                    ),
                    array(
                        'name' => 'item_price',
                        'width' => 30,
                        'title' => 'Unit Price',
                        'title-align' => 'C',
                        'data-align'  => 'R',
                    ),
                    array(
                        'name' => 'item_disc',
                        'width' => 20,
                        'title' => 'Discount',
                        'title-align' => 'C',
                        'data-align'  => 'R',
                    ),
                    array(
                        'name' => 'item_amount',
                        'width' => 30,
                        'title' => 'Amount',
                        'title-align' => 'C',
                        'data-align'  => 'R',
                    ),
                ),
                'data' => 'bill_items',
                'style' => array(
                    'border-color' => '0,0,0',
                    // 'border' => 'LR',
                    'title-row' => array(
                        'height' => 8,
                        'text-color' => '200, 100, 50',
                        'fill-color' => false,
                        // 'font' => 'Arial',
                        'font-size' => 14,
                    ),
                    'data-row' => array(
                        'font-size' => 12,
                        'height' => 7,
                        'text-color' => '0,0,0',
                        'fill-color' => '224,235,255',
                        'striped' => true,
                    ),
                ),
            ),
        ),

        'settings' => array(
            'title'       => 'Test PDF',
            'author'      => 'Rati Wannapanop',
            'subject'     => 'Test Creating PDF',
            'keywords'    => 'test pdf fpdf ratiw',
            'default-font' => array(
                'name' => 'THSarabun',
                'size' => 30,
            ),
            'header-height' => 93,
        ),

        'fonts' => array(
            array('THSarabun', '', 'THSarabun.php'),
            array('THSarabun', 'B', 'THSarabun Bold.php'),
            array('THSarabun', 'I', 'THSarabun Italic.php'),
            array('THSarabun', 'BI', 'THSarabun Bold Italic.php'),
        ),
    );

    $data = array(
        'name' => 'รติ วรรณภานพ',
        'date' => '09/11/2556',
        'report_name' => 'ใบส่งสินค้า/ใบกำกับภาษี',
        'tax_id' => '0193626000226',
        'branch' => 'สำนักงานใหญ่',
        'ar_code'  => 'D007',
        'ar_tax_id' => '1005425879654',
        'ar_branch' => 'สำนักงานใหญ่',
        'ar_name' => 'บริษัท ดิสเพลย์เซลแอนด์เซอร์วิส',
        'ar_addr1' => '333/3 ถ.เจริญกรุง บางรัก',
        'ar_addr2' => 'กรุงเทพฯ 10800',
        'po_no' => 'PO14/2051',
        'remark' => '',
        'doc_date' => '02/08/56',
        'doc_no' => '56/1187',
        'sale_id' => 'เกียรติยศ',
        'pay_terms' => '15 วัน',
        'duedate' => '17/08/56',
        'delivery' => 'บขส.',
        'bill_items' => array(
            // 12 items
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
            array('item_code' => 'Austria', 'item_desc' => 'Vienna', 'item_qty' => '83,859', 'item_price' => '8,075', 'item_disc' => '', 'item_amount' => '3,750.00'),
        ),
    );

    $pdf = new ratiw\JsonPDF\JsonPDF('P', 'mm', 'A4');
    $pdf->make(json_encode($document), json_encode($data), 'both');
    $pdf->render();

?>