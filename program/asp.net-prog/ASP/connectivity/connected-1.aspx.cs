using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

public partial class connected_1 : System.Web.UI.Page
{
    
    SqlConnection con= new SqlConnection("Data Source=(LocalDB)\\v11.0;AttachDbFilename=|DataDirectory|\\student.mdf;Integrated Security=True");
    protected void Page_Load(object sender, EventArgs e)
    {
        SqlCommand com = new SqlCommand("select * from stud", con);
        con.Open();
        SqlDataReader dr;
        dr = com.ExecuteReader();
        while(dr.Read())
        {
            TextBox1.Text = dr[0].ToString();
            TextBox2.Text = dr[1].ToString();
            TextBox3.Text = dr[2].ToString();
        }
        con.Close();
    }
}