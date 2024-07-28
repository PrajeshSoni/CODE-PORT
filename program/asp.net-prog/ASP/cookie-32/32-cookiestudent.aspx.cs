using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _32_cookiestudent : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        HttpCookie c = new HttpCookie("user");
        c.Values["name"] = TextBox1.Text;
        c.Values["city"] = TextBox2.Text;
        c.Values["dob"] = TextBox3.Text;
        c.Values["contectno"] = TextBox4.Text;
        Response.Cookies.Add(c);
        Response.Redirect("cookie.aspx");
    }
}