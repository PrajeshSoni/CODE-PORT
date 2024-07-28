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
    protected void Button2_Click(object sender, EventArgs e)
    {
        for(int i=0;i<ListBox1.Items.Count;i++)
        {
            ListBox2.Items.Add(ListBox1.Items[i]);
        }
        ListBox1.Items.Clear();
    }
    protected void Button3_Click(object sender, EventArgs e)
    {
        while (ListBox2.SelectedIndex != -1)
        {
            ListBox1.Items.Add(ListBox2.Text);
            ListBox2.Items.Remove(ListBox1.Text);
        }
    }
    protected void Button4_Click(object sender, EventArgs e)
    {
        for (int i = 0; i < ListBox2.Items.Count; i++)
        {
            ListBox1.Items.Add(ListBox2.Items[i]);
        }
        ListBox2.Items.Clear();
        
    }
}