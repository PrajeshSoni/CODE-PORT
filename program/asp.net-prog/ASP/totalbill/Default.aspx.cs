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
    protected void ListBox1_SelectedIndexChanged(object sender, EventArgs e)
    {
        for(int j=0;j<ListBox1.Items.Count;j++)
        {
            if(ListBox1.Items[j].Selected==true)
            {
                ListBox2.Items[j].Selected = true;
            }
        }
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        int sum = 0;
        for(int i=0;i<ListBox2.Items.Count;i++)
        {
            if(ListBox2.Items[i].Selected==true)
            {
                sum = sum + Convert.ToInt32(ListBox2.Items[i].Text);
            }
            TextBox1.Text = sum.ToString();
        }
    }
    protected void ListBox2_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
}