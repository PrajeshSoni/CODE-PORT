using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

public partial class assi_3 : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection("Data Source=(LocalDB)\\v11.0;AttachDbFilename=|DataDirectory|\\student.mdf;Integrated Security=True");
    protected void Page_Load(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("select * from stud", con);
        SqlDataReader dr;
        con.Open();
        dr = com.ExecuteReader();
        if(!IsPostBack)
        {
            while(dr.Read())
            {
                DropDownList1.Items.Add(dr[0].ToString());
            }
        }
        con.Close();
     }
    protected void Button1_Click(object sender, EventArgs e)
    {
        string nm,st;
        nm = TextBox1.Text;
        st = TextBox2.Text;
        SqlCommand com = new SqlCommand("update stud set name='" + nm + "',stream='" + st + "'where Id=" + DropDownList1.SelectedValue, con);
        con.Open();
        Response.Write(com.ExecuteNonQuery().ToString());
        con.Close();
    }
    protected void DropDownList1_SelectedIndexChanged(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("select * from stud where Id=" + DropDownList1.SelectedValue, con);
        con.Open();
        SqlDataReader dr;
        dr = com.ExecuteReader();
        while (dr.Read())
        {
           
            TextBox1.Text = dr[1].ToString();
            TextBox2.Text = dr[2].ToString();
        }
        con.Close();

    }
    protected void Button2_Click(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("delete from stud where Id=" + DropDownList1.SelectedValue, con);
        con.Open();
        Response.Write(com.ExecuteNonQuery().ToString());
        con.Close();
    }
    protected void TextBox1_TextChanged(object sender, EventArgs e)
    {

    }
}