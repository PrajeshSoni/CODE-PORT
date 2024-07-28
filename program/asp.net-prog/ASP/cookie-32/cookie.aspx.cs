using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class cookie : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        Label1.Text = Request.Cookies["user"].Values["name"].ToString();
        Label2.Text = Request.Cookies["user"].Values["city"].ToString();
        Label3.Text = Request.Cookies["user"].Values["dob"].ToString();
        Label4.Text = Request.Cookies["user"].Values["contectno"].ToString();
    }
}