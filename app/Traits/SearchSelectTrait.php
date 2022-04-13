<?php

namespace App\Traits;

Trait SearchSelectTrait
{


    public function my_search($model ,  $myRequest , $title = 'title'  , $rowname = 'name' , $firstTH = 'Title', $secondTH = 'Email'  , $secondTD='email' ,$thirdTH=null , $thirdTD=null, $link=null , $endLink=null )
    {
        if ($myRequest->search != null && $myRequest->search != ""){
            if ($myRequest->ajax()) {

                $data = $model::where($title . '->ar', 'like', '%' . $myRequest->search . '%')

                    ->orWhere($title . '->en', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($title . '->ru', 'like', '%' . $myRequest->search . '%')

                    ->orWhere('created_at', 'like', '%' . $myRequest->search . '%')
                    ->orWhere('updated_at', 'like', '%' . $myRequest->search . '%')

                    ->get();
                $output = '';
                if (count($data) > 0) {

                    $output .=
                        "<table id='table-live-search' class='table-live-search border border-2 table'>" .

                        "<thead class='border border-2 p-5'>" .
                        "<tr>" .
                        "<th scope='col'>#</th>" .
                        "<th scope='col'>".$firstTH."</th>" .
                        "<th scope='col'>".$secondTH."</th>" .
                        "<th scope='col'>".$thirdTH."</th>" .

                        "</tr>" .
                        "</thead>" .

                        "<tbody class='p-5'>";


                    foreach ($data as $row) {

                        $output .= "<tr class='w-100 p-2'>" .
                            "<th class='p-2' scope='row'>" . $row->id . "</th>" .
                            "<td class='p-2'>" . $link . $row->$title . $endLink . "</td>" .
                            "<td class='p-2'>" . $row->$secondTD . "</td>" .
                            "<td class='p-2'>" . $row->$thirdTD . "</td>" .

                            /********************************/
                            "  <td>" .
                            '<button type="button" onclick="getVal(this)" data-val="'.$row->id.'"   data-name="'.$row->$rowname.'" class="btn btn-info btn-sm" data-toggle="modal"' .
                            ' data-target="#edit' . $row->id . '"' .
                            '   title="edit"><i class="fa fa-edit"></i></button>' .
                            '  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"' .
                            '   data-target="#delete' . $row->id . '"' .
                            '  title="delete"><i' .
                            ' class="fa fa-trash"></i></button>' .
                            ' </td>' .


                            /*****************************/
                            "</tr>";
                    }


                    $output .= "</tbody></table>";


                } else {
                    $output .= 'No Results';
                }

                echo $output;

            }//request ajax
        }
    }


    public function regionSearch($model ,  $myRequest , $title = 'government'  , $rowname = 'city' , $rowname2 = 'district' , $firstTH = 'Government', $secondTH = 'City'  , $secondTD='city' ,$thirdTH='District' , $thirdTD='district', $secondQuery = 'city' , $thirdQuery='district' , $fourthQuery = 'desc' ,$link=null , $endLink=null )
    {
        if ($myRequest->search != null && $myRequest->search != ""){
            if ($myRequest->ajax()) {

                $data = $model::where($title . '->ar', 'like', '%' . $myRequest->search . '%')

                    ->orWhere($title . '->en', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($title . '->ru', 'like', '%' . $myRequest->search . '%')

                    ->orWhere($secondQuery . '->ar', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($secondQuery . '->en', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($secondQuery . '->ru', 'like', '%' . $myRequest->search . '%')

                    ->orWhere($thirdQuery . '->ar', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($thirdQuery . '->en', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($thirdQuery . '->ru', 'like', '%' . $myRequest->search . '%')

                    ->orWhere($fourthQuery . '->ar', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($fourthQuery . '->en', 'like', '%' . $myRequest->search . '%')
                    ->orWhere($fourthQuery . '->ru', 'like', '%' . $myRequest->search . '%')


                    ->get();
                $output = '';
                if (count($data) > 0) {

                    $output .=
                        "<table id='table-live-search' class='table-live-search border border-2 table'>" .

                        "<thead class='border border-2 p-5'>" .
                        "<tr>" .
                        "<th scope='col'>#</th>" .
                        "<th scope='col'>".$firstTH."</th>" .
                        "<th scope='col'>".$secondTH."</th>" .
                        "<th scope='col'>".$thirdTH."</th>" .

                        "</tr>" .
                        "</thead>" .

                        "<tbody class='p-5'>";


                    foreach ($data as $row) {

                        $output .= "<tr class='w-100 p-2'>" .
                            "<th class='p-2' scope='row'>" . $row->id . "</th>" .
                            "<td class='p-2'>" . $link . $row->$title . $endLink . "</td>" .
                            "<td class='p-2'>" . $row->$secondTD . "</td>" .
                            "<td class='p-2'>" . $row->$thirdTD . "</td>" .

                            /********************************/
                            "  <td>" .
                            '<button type="button" onclick="getVal(this)" data-val="'.$row->id.'"   data-name="'.$row->$rowname. ' ' .$row->$rowname2.'" class="btn btn-info btn-sm" data-toggle="modal"' .
                            ' data-target="#edit' . $row->id . '"' .
                            '   title="edit"><i class="fa fa-edit"></i></button>' .
                            '  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"' .
                            '   data-target="#delete' . $row->id . '"' .
                            '  title="delete"><i' .
                            ' class="fa fa-trash"></i></button>' .
                            ' </td>' .


                            /*****************************/
                            "</tr>";
                    }


                    $output .= "</tbody></table>";


                } else {
                    $output .= 'No Results';
                }

                echo $output;

            }//request ajax
        }
    }


}
