using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class querystring : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void RadioButton1_CheckedChanged(object sender, EventArgs e)
    {
        Response.Redirect("image.aspx?img=" + RadioButton1.Text);
    }
    protected void RadioButton2_CheckedChanged(object sender, EventArgs e)
    {
        Response.Redirect("image.aspx?img=" + RadioButton2.Text);
    }
    protected void RadioButton3_CheckedChanged(object sender, EventArgs e)
    {
        Response.Redirect("image.aspx?img=" + RadioButton3.Text);
    }
    protected void RadioButton4_CheckedChanged(object sender, EventArgs e)
    {
        Response.Redirect("image.aspx?img=" + RadioButton4.Text);
    }
}