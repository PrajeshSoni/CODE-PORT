using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class form1 : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        string n, p, c;
        n = Session["itemname"].ToString();
        p = Session["prise"].ToString();
        c = Session["contity"].ToString();
        Response.Write(n.ToString());
        Response.Write(p.ToString());
        Response.Write(c.ToString());
    }
}