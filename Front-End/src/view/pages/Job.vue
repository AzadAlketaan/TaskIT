<template>
  <div class="card card-custom card-stretch gutter-b card-shadowless bg-light">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
      <h3 class="card-title align-items-start flex-column">
        <span class="card-label font-weight-bolder text-dark"> Jobs </span>
        <!--span class="text-muted mt-3 font-weight-bold font-size-sm">
          More than 400+ new members
        </span-->
      </h3>
      <div class="card-toolbar" v-on:click="$router.push('addjob')">
        <a href="#" class="btn btn-success font-weight-bolder font-size-sm">
          Add New Job</a
        >
      </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
      <!--begin::Table-->
      <div class="table-responsive">
        <table
          class="table table-head-custom table-vertical-center"
          id="kt_advance_table_widget_1"
        >
          <thead>
            <tr class="text-left">
              <th class="pl-0" style="width: 20px">
                <label class="checkbox checkbox-lg checkbox-single">
                  <input
                    type="checkbox"
                    @input="setCheck($event.target.checked)"
                  />
                  <span></span>
                </label>
              </th>
              <th class="pr-0" style="width: 50px">Name</th>
              <th style="min-width: 200px"></th>
              <th style="min-width: 150px">Description</th>
              <th style="min-width: 150px">Date</th>
              <th class="pr-0 text-right" style="min-width: 150px">action</th>
            </tr>
          </thead>
          <tbody>
            <template v-for="(item, i) in list">
              <tr v-bind:key="i">
                <td class="pl-0">
                  <label class="checkbox checkbox-lg checkbox-single">
                    <input type="checkbox" value="1" :checked="checked" />
                    <span></span>
                  </label>
                </td>
                <td class="pr-0">
                  <div class="symbol symbol-50 symbol-light mt-1">
                    <span class="symbol-label">
                      <img
                        :src="item.text0"
                        class="h-75 align-self-end"
                        alt=""
                      />
                    </span>
                  </div>
                </td>
                <td class="pl-0">
                  <a
                    href="#"
                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"
                    >{{ item.text1 }}</a
                  >
                  <span
                    class="text-muted font-weight-bold text-muted d-block"
                    >{{ item.text2 }}</span
                  >
                </td>
                <td>
                  <span
                    class="text-dark-75 font-weight-bolder d-block font-size-lg"
                    >{{ item.text3 }}</span
                  >
                  <span class="text-muted font-weight-bold">{{
                    item.text4
                  }}</span>
                </td>
                <td>
                  <div class="d-flex flex-column w-100 mr-2">
                    <div
                      class="d-flex align-items-center justify-content-between mb-2"
                    >
                      <span
                        class="text-muted mr-2 font-size-sm font-weight-bold"
                        >{{ item.text5 }}</span
                      >
                    </div>
                    <!--div class="progress progress-xs w-100">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        :style="{ width: item.text5 }"
                        v-bind:class="`bg-${item.text6}`"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div-->
                  </div>
                </td>
                <td class="pr-0 text-right">
                  <a
                    href="#"
                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
                  >
                    <span class="svg-icon svg-icon-md svg-icon-primary">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                      <inline-svg
                        src="media/svg/icons/Communication/Write.svg"
                      />
                      <!--end::Svg Icon-->
                    </span>
                  </a>
                  <a
                    href="#"
                    class="btn btn-icon btn-light btn-hover-primary btn-sm"
                  >
                    <span class="svg-icon svg-icon-md svg-icon-primary">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                      <inline-svg src="media/svg/icons/General/Trash.svg" />
                      <!--end::Svg Icon-->
                    </span>
                  </a>
                </td>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
      <!--end::Table-->
    </div>
    <!--end::Body-->
  </div>
</template>

<script>
export default {
  name: "widget-8",
  data() {
    return {
      list: [
        {
          //text0: "media/svg/avatars/001-boy.svg",
          text1: "Job 1",
          ///text2: "HTML, JS, ReactJS",
          text3: "InterticoKLMSJJJHjhVSAJfjhBAJSfhvashvcfhvahjcv",
          //text4: "Web, UI/UX Design",
          text5: "24/5/2021",
          text6: "danger",
        },
        {
          //text0: "media/svg/avatars/018-girl-9.svg",
          text1: "Job 2",
          //text2: "C#, ASP.NET, MS SQL",
          text3: "InterticoKLMSJJJHjhVSAJfjhBAJSfhvashvcfhvahjcv",
          //text4: "Houses & Hotels",
          text5: "24/5/2021",
          text6: "success",
        },
        {
          //text0: "media/svg/avatars/047-girl-25.svg",
          text1: "Job 3",
          //text2: "PHP, Laravel, VueJS",
          text3: "InterticoKLMSJJJHjhVSAJfjhBAJSfhvashvcfhvahjcv",
          //text4: "Transportation",
          text5: "24/5/2021",
          text6: "primary",
        },
        {
          //text0: "media/svg/avatars/014-girl-7.svg",
          text1: "Job 4",
          //text2: "Python, PostgreSQL, ReactJS",
          text3: "InterticoKLMSJJJHjhVSAJfjhBAJSfhvashvcfhvahjcv",
          //text4: "Insurance",
          text5: "24/5/2021",
          text6: "danger",
        },
      ],
      checked: false,
    };
  },
  components: {},
  methods: {
    setCheck(checked) {
      this.checked = checked;
    },
  },
};
</script>
