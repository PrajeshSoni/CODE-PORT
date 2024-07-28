using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.Sql;
using System.Data.SqlClient;

public partial class _Default : System.Web.UI.Page
{
    SqlConnection cn;
    SqlCommand cmd;
    string q, nm, ct, gen;
    protected void Page_Load(object sender, EventArgs e)
    {
        cn = new SqlConnection("Data Source=(LocalDB)\\v11.0;AttachDbFilename=F:\\TYBCA SEM 5\\ASP\\democonnect\\App_Data\\Database.mdf;Integrated Security=True");
        cn.Open();
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        nm = t1.Text;
        if(RadioButton1.Checked)
        {
            gen = "MALE";
        }
        else if(RadioButton2.Checked)
        {
            gen = "FEMALE";
        }
        ct = DropDownList1.Text;
        q="insert into stud (name,city,gender) values('"+nm+"','"+gen+"','"+ct+"')";
        cmd = new SqlCommand(q, cn);
        cmd.ExecuteNonQuery();
    }
}