<?php

    
    $action = $_POST['action'];
    $action(); 
	function insert(){
	    $name=$_POST['name'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];      
        $edu=$_POST['edu'];
        $skill=$_POST['skill'];
        $con = new mysqli("localhost","root","","assesment");
        $sql = $con->query("INSERT INTO tbl_data (name,phone,address,edu,skill)VALUES('$name','$phone','$address','$edu','$skill')");
        if($sql)
            echo "seccess";

	}

    function show(){
        $con = new mysqli("localhost","root","","assesment");
        $data = $con->query("SELECT * FROM tbl_data");
        if($data->num_rows > 0){
            $sl=1;
        $table = '
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Education</th>
                            <th>Skill</th>
                        </tr>
                        
                    </thead>
                    <tbody>';
            while($tdata = $data->fetch_assoc()){

                    $sedu1="";
                    $sedu2="";
                    $sedu3="";
                    $sedu4="";
                    if($tdata['edu']== 1)
                        $sedu1='selected = "selected"';
                    elseif($tdata['edu']== 2)
                        $sedu2='selected = "selected"';
                    elseif($tdata['edu']== 3)
                        $sedu3='selected = "selected"';
                    elseif($tdata['edu']== 4)
                        $sedu4='selected = "selected"';

                    $skill1="";
                    $skill2="";
                    $skill3="";
                    if($tdata['skill']== 1)
                        $skill1='selected = "selected"';
                    elseif($tdata['skill']== 2)
                        $skill2='selected = "selected"';
                    elseif($tdata['skill']== 3)
                        $skill3='selected = "selected"';

                    $table .='<tr>
                            <td>'.$tdata["name"].'</td>
                            <td>'.$tdata["phone"].'</td>
                            <td>'.$tdata["address"].'</td>
                            <td>
                                <select id = "'.$tdata["id"].'" class="edu">
                                <option value="">------ Select Option ------</option>
                                <option value="1" '.$sedu1.'>SSC</option>
                                <option value="2" '.$sedu2.'>HSC</option>
                                <option value="3" '.$sedu3.'>BSC</option>
                                <option value="4" '.$sedu4.'>MSC</option>
                            </select>
                            </td>
                            <td><select value="2" id = "'.$tdata["id"].'" class="skill">
                                <option value="">------ Select Option ------</option>
                                <option value="1" '.$skill1.'>PHP</option>
                                <option value="2" '.$skill2.'>Wordpress</option>
                                <option value="3" '.$skill3.'>Laravel</option>
                            </select></td>
                            </tr>';
                            $sl++;

            }
                        
                $table .='</tbody>';
            echo $table;
        }
        
    }


    function update(){
        $id = $_POST['id'];
        $col = $_POST['col'];
        $uval = $_POST['uval'];
        $con = new mysqli("localhost","root","","assesment");
        $sql = $con->query("UPDATE tbl_data SET $col = '$uval' WHERE id = '$id'");
        if($sql){
            echo "Updated";
        }
    }