using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class about_us : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        
    }
    protected void RadioButton1_CheckedChanged(object sender, EventArgs e)
    {
        if (RadioButton1.Checked == true)
        {
            Response.Write("you selected BCA");
        }
    }

    protected void RadioButton2_CheckedChanged(object sender, EventArgs e)
    {
        if (RadioButton2.Checked == true)
        {
            Response.Write("you selected BBA");
        }
    }
    protected void RadioButton3_CheckedChanged(object sender, EventArgs e)
    {
        if (RadioButton3.Checked == true)
        {
            Response.Write("you selected Bsc");
        }
    }
    protected void RadioButton4_CheckedChanged(object sender, EventArgs e)
    {
        if (RadioButton4.Checked == true)
        {
            Response.Write("you selected B.com");
        }
    }
}