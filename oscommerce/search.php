<?php
/*
  $Id: search.php,v 1.22 2003/02/10 22:31:05 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
?>
<!-- search //-->
          <tr>
            <td>
<?php
  $info_box_contents = array();
  $info_box_contents[] = array('text' => BOX_HEADING_ADVSEARCH);

  new infoBoxHeading($info_box_contents, false, false);

  /*********** OPTIONS START ***********/
  $catBoxWidth = BOX_WIDTH - 5; //change BOX_WIDTH - 5 to whatever number you like to control the width of the category box
  $showCatBox = true;
  $showPrice = true;
  /*********** OPTIONS END ***********/  
  
  $catBox = ($showCatBox ? '<tr><td height="3"></td></tr><tr><td class="infoBoxContents" valign="top" colspan="3">' . BOX_ADVSEARCH_CAT . '</td></tr><tr><td class="infoBoxContents" valign="top" colspan="3">' . tep_draw_pull_down_menu('categories_id', tep_get_categories(array(array('id' => '', 'text' => BOX_ADVSEARCH_ALLCAT))), '', 'style="width:' . $catBoxWidth . ';"') . '</td></tr>' : '');
  $priceBoxes = ($showPrice ? '<tr><td height="3"></td></tr><tr><td class="infoBoxContents" valign="top" colspan="3">' . BOX_ADVSEARCH_PRICERANGE . '</td></tr><tr><td class="infoBoxContents" valign="top" align="center" colspan="3">' . tep_draw_input_field('pfrom','','size="4" maxlength="8"') . BOX_ADVSEARCH_PRICESEP . tep_draw_input_field('pto','','size="4" maxlength="8"') . '</td></tr>' : '');

  $info_box_contents = array();
  $info_box_contents[] = array('form' => tep_draw_form('advanced_search', tep_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get'),
                               'text' => '<table border="0" width="100%" cellspacing="0" cellpadding="1"><tr><td class="infoBoxContents" valign="top" colspan="3">' . BOX_ADVSEARCH_KW . '</td></tr><tr><td class="infoBoxContents" valign="top" colspan="3">' . tep_draw_hidden_field('search_in_description','1') . tep_draw_input_field('keywords', '', 'size="15" maxlength="30" style="width: ' . (BOX_WIDTH) . 'px" onFocus="form.keywords.value=\'\'"') . '</td></tr>' .
                               $priceBoxes . $catBox .
                               '<tr><td class="infoBoxContents" valign="top" colspan="3">&nbsp;</td></tr><tr><td class="infoBoxContents" valign="top" colspan="3"><center>' . tep_image_submit('button_search.gif', BOX_SEARCH_ADVANCED_SEARCH) . '</center></td></tr></table>');

  new infoBox($info_box_contents);
?>
            </td>
          </tr>
<!-- search_eof //-->







