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
        while(ListBox1.SelectedIndex!=-1)
        {
            ListBox2.Items.Add(ListBox1.Text);
            ListBox1.Items.Remove(ListBox2.Text);
        }
    }
}