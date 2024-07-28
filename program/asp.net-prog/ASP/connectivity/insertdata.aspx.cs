using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Data;

public partial class insertdata : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection("Data Source=(LocalDB)\\v11.0;AttachDbFilename=|DataDirectory|\\student.mdf;Integrated Security=True");
    protected void Page_Load(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("select * from stud", con);
        con.Open();
        SqlDataReader dr;
        dr = com.ExecuteReader();
        con.Close();
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("insert into stud values("+TextBox1.Text+",'"+TextBox2.Text+"','"+DropDownList1.SelectedValue+"')", con);
        con.Open();
        Response.Write(com.ExecuteNonQuery().ToString());
        con.Close();
    }
}