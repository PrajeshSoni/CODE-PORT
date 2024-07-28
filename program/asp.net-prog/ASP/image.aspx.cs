using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class image : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        string s;
        s = Request.QueryString["img"];
        if(s=="mouse")
        {
            Image1.ImageUrl = "img\\mouse.jpeg";
        }
        else if(s=="monitor")
        {
            Image1.ImageUrl = "img\\monitor.jpeg";
        }
        else if (s == "keyboard")
        {
            Image1.ImageUrl = "img\\keyboard.jpeg";
        }
        else
        {
            Image1.ImageUrl = "img\\ram.jpeg";
        }

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        Response.Redirect("querystring.aspx");
    }
}