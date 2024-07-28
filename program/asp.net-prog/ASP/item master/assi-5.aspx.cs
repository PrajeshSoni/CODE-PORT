using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
public partial class assi_5 : System.Web.UI.Page
{
    SqlConnection con=new SqlConnection("Data Source=(LocalDB)\\v11.0;AttachDbFilename=|DataDirectory|\\itemmaster.mdf;Integrated Security=True");
    protected void Page_Load(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("select * from items", con);
        con.Open();
        SqlDataReader dr = com.ExecuteReader();
        while(dr.Read())
        {
            DropDownList1.Items.Add(dr[0].ToString());
        }
        con.Close();
    }
    protected void DropDownList1_SelectedIndexChanged(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("select * from items where itemid=" + DropDownList1.SelectedValue, con);
        con.Open();
        SqlDataReader dr;
        dr = com.ExecuteReader();
        while(dr.Read())
        {
            TextBox1.Text = dr[1].ToString();
            TextBox2.Text = dr[2].ToString();
            TextBox3.Text = dr[3].ToString();
        }
        con.Close();
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        Session["itemname"] = TextBox1.Text;
        Session["prise"] = TextBox2.Text;
        Session["contity"] = TextBox3.Text;
        Response.Redirect("form1.aspx");
    }
}