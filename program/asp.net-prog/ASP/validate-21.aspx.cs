using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class validate : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void TextBox4_TextChanged(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        Panel1.Visible = true;
        Label9.Text = "your name is:" + TextBox1.Text;
        Label10.Text = "your age is :" + TextBox2.Text;
        Label11.Text = "your stream is :" + DropDownList1.Text;
        Label12.Text = "your email is :" + TextBox4.Text;
        Label13.Text = "your contact no is :" + TextBox5.Text;
        Label14.Text = "your password is :" + TextBox6.Text;
        Label15.Text = "your confirm password is :" + TextBox7.Text;
        Label16.Text = "your date of birth is :" + TextBox8.Text;

    }
}