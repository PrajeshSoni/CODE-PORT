using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        Label2.Text=(Label1.Text + " : " + TextBox1.Text);
        Label2.Text = (Label3.Text + " : " + TextBox2.Text);
        Label2.Text = (Label4.Text + " : " + DropDownList1.SelectedValue);
        Label2.Text = (Label5.Text + " : " + TextBox3.Text);
        Label2.Text = (Label6.Text + " : " + TextBox4.Text);
        Label2.Text = (Label7.Text + " : " + TextBox5.Text);
        Label2.Text = (Label8.Text + " : " + TextBox6.Text);

    }
    protected void TextBox1_TextChanged(object sender, EventArgs e)
    {

    }
    protected void TextBox2_TextChanged(object sender, EventArgs e)
    {

    }
}