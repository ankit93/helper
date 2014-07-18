<?php
require_once 'db.class.php';
class GM
{
    function __construct()
    {
        $this->dbc = new db();
    }

    function logout()
    {
       session_unset();
        session_destroy();
    }


    function LoginAdmin($username, $password)
    {
        $sql = $this->dbc->query("SELECT * FROM admin WHERE UserName='" . $username .
            "' 	and UserPassword = '" . $password . "'");
        $rows = $this->dbc->num($sql);
        if ($rows > 0) {
            return "true";
        } else {
            return mysql_error();
        }
    }


    /* our portfolio */

    function addPortfolio($projectTitle, $projectDescription, $projectDate, $filePhoto,
        $projectUrl, $projectSortOrder)
    {
     $query = "insert into portfolioinfo set
	 ProjectTitle='" . $projectTitle . "',
	 ProjectDescription='" . $projectDescription . "',
	 ProjectImage='" . $filePhoto . "',
	 ProjectUrl='" . $projectUrl . "',
	 ProjectDate='" . $projectDate . "',
	 ProjectSortOrder=" . $projectSortOrder;
        if ($this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_errno();
        }
	  
    }

    function getAllData()
    {
        $query = "select * from portfolioinfo ";

        if ($list = $this->dbc->query($query)) {
            $array = array();
            while ($row = $this->dbc->fetch($list)) {
                $array[] = $row;		
            }
			
            return $array;
        } else {
            return mysql_error();
        }
    }

    function updatePortfoliobyId($projectTitle, $projectDescription, $projectDate, $filePhoto, $projectUrl, $projectSortOrder, $projectId)
    {
        $query = "Update portfolioinfo SET
      				 ProjectTitle='".$projectTitle. "',
		  			 ProjectDescription='" .$projectDescription. "',
					 ProjectDate='" .$projectDate. "',
					 ProjectImage='" .$filePhoto. "',
					 ProjectUrl='" . $projectUrl. "',
					 ProjectSortOrder='" . $projectSortOrder . "'
					 WHERE ProjectId =" . $projectId;

        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_error();
        }
    }

    function deleteProjectdata($id)
    {
        $query = "Delete  from  portfolioinfo where ProjectId=" . $id;

        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return "false";
        }
    }


    function getPortfolioRecordById($prjId)
    {
        $query = "select * from portfolioinfo where ProjectId= " . $prjId;

        if ($list = $this->dbc->query($query)) {
            $array = array();
            while ($row = $this->dbc->fetch($list, MYSQL_ASSOC)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return "false";
        }

    }
    

    function getDataById($id)
    {
        $query = "select * from portfolioinfo where ProjectId= " . $id;

        if ($list = $this->dbc->query($query)) {
            $array = array();
            while ($row = $this->dbc->fetch($list, MYSQL_ASSOC)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return "false";
        }
    }


    //Testimonial table
    function getRecordById()
    {
        $query = "select * from testimonialinfo";

        if ($list = $this->dbc->query($query)) {
            $array = array();
            while ($row = $this->dbc->fetch($list, MYSQL_ASSOC)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return "false";
        }
    }
    function insertTestimonial($testimonialDescription, $personPosition, $personName,
        $createdDate)
    {

        $query = "insert into testimonialinfo set
	 TestimonialDescription ='" . $testimonialDescription . "',
	 PersonPosition ='" . $personPosition . "',
	 PersonName='" . $personName . "',
	 CreatedDate ='" . $createdDate . "'";

        if ($this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_errno();
        }
    }


    function getTestimonialRecordById($tstId)
    {

        $query = "select * from testimonialinfo where TestimonialId = " . $tstId;

        if ($list = $this->dbc->query($query)) {
            $array = array();
            while ($row = $this->dbc->fetch($list, MYSQL_ASSOC)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return "false";
        }

    }

    function deleteTestimonialdata($id)
    {
        $query = "Delete  from  testimonialinfo where TestimonialId=" . $id;

        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return "false";
        }
    }

    function updateTestimonialById($testimonialDescription, $personPosition, $personName,
        $createdDate, $testimonialId)
    {

        $query = "Update testimonialinfo SET
      				 TestimonialDescription='" . $testimonialDescription . "',
		  			 PersonPosition='" . $personPosition . "',
					 PersonName='" . $personName . "',
					 CreatedDate='" . $createdDate . "'
		  			 WHERE TestimonialId =" . $testimonialId;

        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_error();

        }
    }

    //Quote table
    function getQuotebyEmail($ProfilEmail)
    {
        $query = "SELECT * FROM QuoteInfo WHERE QuoteEmail ='" . $ProfilEmail . "'";

        if ($result = $this->dbc->query($query)) {
            return $this->dbc->fetch($result);
        } else {
            return mysql_error();
        }
    }
    
    function insertquote($QuoteName, $QuoteEmail, $QuoteCompany, $QuoteDescription)
    {
        $query = "insert into quoteinfo set
		         QuoteName='" . $QuoteName . "',
		         QuoteEmail ='" . $QuoteEmail . "',
		         QuoteCompany='" . $QuoteCompany . "',
		         QuoteDescription='" . $QuoteDescription . "',
		         CreatedDate ='" . date('Y-m-d') . "'";
        if ($this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_error();
        }

    }

    function getQuoteRecordById($id)
    {
        $query = "select * from quoteinfo where QuoteId= " . $id;
        if ($list = $this->dbc->query($query)) {
            $array = array();
            while ($row = $this->dbc->fetch($list, MYSQL_ASSOC)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return "false";
        }

    }
    function updateQuoteRecordById($name, $email, $company, $description, $id) {
        $query = "Update quoteinfo SET
           		QuoteName='" . $name . "',
       		 QuoteEmail='" . $email . "',
     		QuoteCompany='" . $company . "',
      QuoteDescription='" . $description . "'
      WHERE QuoteId =" . $id;

        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_error();
        }
    }
    function deleteQuoteRecord($id)
    {
        $query = "Delete  from  quoteinfo where QuoteId=" . $id;

        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return "false";
        }
    }


    //Contact table
    function insertcontact($ContactName, $ContactEmail, $ContactTelephone, $ContactCountry, $ContactSubject, $ContactMessage)
    {
        $query = "insert into contactinfo set
		        ContactName='" . $ContactName . "',
		       	ContactEmail ='" . $ContactEmail . "',
		        ContactTelephone='" . $ContactTelephone . "',
		        ContactCountry='" . $ContactCountry . "',
		        ContactSubject='" . $ContactSubject . "',
		        ContactMessage='" . $ContactMessage . "',
		        CreatedDate ='" . date('Y-m-d') . "'";
        if ($this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_error();
        }
    }
    function getContactRecordById($id){
        $query = "select * from contactinfo where ContactId=" . $id;

        if ($list = $this->dbc->query($query)) {
            $array = array();
            while ($row = $this->dbc->fetch($list, MYSQL_ASSOC)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return "false";
        }

    }

    function updateContactbyId($name, $email, $telephone, $country, $subject, $message,$id){
        $query = "Update contactinfo SET
						           ContactName='" . $name . "',
						           ContactEmail='" . $email . "',
						           ContactTelephone='" . $telephone . "',
						           ContactCountry='" . $country . "',
						     	   ContactSubject='" . $subject . "',
						           ContactMessage='" . $message . "'
  		WHERE ContactId =" . $id;
        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return mysql_error();
        }
    }

    function deleteContactRecord($id){
        $query = "Delete  from  contactinfo where ContactId=" . $id;

        if ($result = $this->dbc->query($query)) {
            return "true";
        } else {
            return "false";
        }
    }


}

?>
